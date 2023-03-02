<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\facturacion;
use App\Models\soporte;
use App\Models\centros;
use App\Models\mensajesSoporte;
use Session;
use View;
use File;
use Throwable;

class consultaFacturaController extends Controller
{
    public function index(){
        return view('cfdi.consulta');
    }

    public function home(){
        $query = facturacion::getFacturasCliente(Session::get('RFC'),Session::get('CORREO_ELECTRONICO'));
        $count = $query->countBy('estatus')->toArray();
        $table = View::make('cfdi.table-cfdi-results',["query"=>$query])->render();
        return view('cfdi.cfdi-cliente',["tableResults"=>$table, "count" => $count]);
    }

    public function supportCfdi($uniqid){
        $factura = facturacion::where('uniqid',$uniqid);
        if($factura->exists()){
            Session::put('UNIQID',$uniqid);
            $datosSolicitud = $factura->first();
            $support = soporte::where('facturacion_id',$datosSolicitud->id)->first();
            if($support != null){
                $messages = mensajesSoporte::where('soporte_id',$support->id)
                            ->selectRaw('id, soporte_id,remitente,destinatario,mensaje, created_at as CREATED_AT, UPDATED_AT')
                            ->orderBy('CREATED_AT','desc')
                            ->get();
            }
            
            $supportMessages = ($support != null) ? View::make('cfdi.message-accordion',["messages" => $messages])->render() : '';

            return view('cfdi.cfdi-support',["datosSolicitud" => $datosSolicitud, "support" => $supportMessages, "supportData" => $support]);
        }        
    }

    public function supportMessage(Request $r){
        $factura = facturacion::where('uniqid',Session::get('UNIQID'))->first();
        $soporte = soporte::where('facturacion_id',$factura->id)->exists();
        if($soporte){
           //Solo inserta el mensaje
           $soporte = soporte::where('facturacion_id',$factura->id)->first();
           $folio_sifol = $soporte->folio_sifol;
           
        }else{
            //Crear registro de soporte
            $folio_sifol = self::crearSIFOL($factura->num_tienda, e($r->txtMessage));
            $soporte = new soporte;
            $soporte->facturacion_id = $factura->id;
            $soporte->estatus_id = 9;
            $soporte->folio_sifol = $folio_sifol;
            $soporte->fecha = date('Y-m-d');
            $soporte->save();
        }

        $msj_sifol_id = self::escribeMensajeSIFOL($folio_sifol,e($r->txtMessage));
        if($msj_sifol_id != null){
            $msj = new mensajesSoporte;
            $msj->soporte_id = $soporte->id;
            $msj->msj_sifol_id = $msj_sifol_id;
            $msj->remitente = Session::get('RFC');
            $msj->mensaje = e($r->txtMessage);
            $msj->save();
            return response()->json(["TMensaje" => "success","soporte"=>$soporte->id]);
        }else{
            return response()->json(["TMensaje" => "warning","Mensaje"=>"No fue posible enviar el mensaje","soporte"=>$soporte->id]);
        }
        

        

        
    }

    public function crearSIFOL($centroMks, $messages){
        try{
            $centro = centros::where('cve_merksyst',$centroMks);
            if($centro->exists()){
                $centro_id_sifol = $centro->first()->sifol_id;
                if($centro_id_sifol == null){
                    $centro_id_sifol = self::obtenerSifolID($centro->first()->cve_sap);
                    $centroVta = $centro->first();
                    $centroVta->sifol_id = $centro_id_sifol;
                    $centroVta->save();
                }
    
                if($centro_id_sifol != null){
                    $endpoint = env('SF_HOST')."folios/crear";
                    $Header = array('Content-Type:application/json');
               
                    $API = curl_init();
                    curl_setopt($API, CURLOPT_URL,$endpoint);
                    $data = ["AREA_ID" => env('SF_AREA'),"TRAB_ID_RFC" => "EXTE-CFDI23-001","DEPARTAMENTO_ID_ORIGEN" => $centro_id_sifol,"SUBCATEGORIA_ID" =>  env('SF_SUBCATEGORIA'),"DESCRIPCION_PROBLEMATICA" => $messages];
                    $payload = json_encode($data);
             
                    curl_setopt($API, CURLOPT_POSTFIELDS, $payload);
                    curl_setopt($API, CURLOPT_HTTPHEADER,$Header);
                    curl_setopt($API, CURLOPT_RETURNTRANSFER,true);
               
                    $Result = curl_exec($API);
                    $httpCode = curl_getinfo($API,CURLINFO_HTTP_CODE);
               
                    switch ($httpCode) {
                      case 200:
                        $InfoSifol = json_decode($Result);
                        return $InfoSifol->data[0]->NUM_FOLIO;
                        break;
                        default:
                        return '000000';
                        break;
                    }
                }
    
            }else{
                return null;
            }
        }catch(Throwable $t){
            return $t->getMessage();
        }
       
    }

    public function obtenerSifolID($cve_sap){
       $Url = env('SF_HOST')."departamentos/encontrar";
       $Header = array('Content-Type:application/json');
  
       $API = curl_init();
       curl_setopt($API, CURLOPT_URL,$Url);
       $payload = json_encode(["Clave" => $cve_sap]);

       curl_setopt($API, CURLOPT_POSTFIELDS, $payload);
       curl_setopt($API, CURLOPT_HTTPHEADER,$Header);
       curl_setopt($API, CURLOPT_RETURNTRANSFER,true);
  
       $Result = curl_exec($API);
       $httpCode = curl_getinfo($API,CURLINFO_HTTP_CODE);
  
       switch ($httpCode) {
         case 200:
           $InfoPedidoSAP = json_decode($Result);
           return $InfoPedidoSAP->data[0]->DEPARTAMENTO_ID;
           break;
           default:
           return null;
           break;
       }
    }

    public function escribeMensajeSIFOL($folio ='F1262430-53', $mensaje='testing'){
        $endpoint = env('SF_HOST')."folios/mensajes/escribir";
        $Header = array('Content-Type:application/json');
        
        $API = curl_init();
        curl_setopt($API, CURLOPT_URL,$endpoint);
        $payload = json_encode(["Folio" => $folio, "TRAB_ID" => "EXTE-CFDI23-001", "FECHA" => date('Y-m-d').'T'.date('H:i:s'),"MENSAJE" => $mensaje]);
 
        curl_setopt($API, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($API, CURLOPT_HTTPHEADER,$Header);
        curl_setopt($API, CURLOPT_RETURNTRANSFER,true);
   
        $Result = curl_exec($API);
        $httpCode = curl_getinfo($API,CURLINFO_HTTP_CODE);
   
        switch ($httpCode) {
          case 200:
            $infoMensaje = json_decode($Result);
            return $infoMensaje->data[0]->MENSAJE_ID;
            break;
            default:
            return null;
            break;
        }
    }

    public function obtenerMensajeSIFOL($folio){
        $endpoint = env('SF_HOST')."folios/mensajes/obtener";
        $Header = array('Content-Type:application/json');
        
        $API = curl_init();
        curl_setopt($API, CURLOPT_URL,$endpoint);
        $payload = json_encode(["Folio" => $folio, "TRAB_ID" => "EXTE-CFDI23-001", "FECHA" => date('Y-m-d').'T'.date('H:i:s'),"MENSAJE" => $mensaje]);
 
        curl_setopt($API, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($API, CURLOPT_HTTPHEADER,$Header);
        curl_setopt($API, CURLOPT_RETURNTRANSFER,true);
   
        $Result = curl_exec($API);
        $httpCode = curl_getinfo($API,CURLINFO_HTTP_CODE);
   
        switch ($httpCode) {
          case 200:
            $infoMensaje = json_decode($Result);
            return $infoMensaje->status;
            break;
            default:
            return json_decode($Result);
            break;
        }
    }

    public function getInvoices(Request $r){
        $query = facturacion::where([['rfc',$r->txtRFC],['correo_electronico',$r->email]]);
        if($query->exists()){
            
            $datosCte = $query->get()->first();
            Session::put('RFC',strtoupper($r->txtRFC));
            Session::put('RAZON_SOCIAL',strtoupper($datosCte->razon_social));
            Session::put('CORREO_ELECTRONICO',strtolower($datosCte->correo_electronico));
            Session::put('CODIGO_POSTAL',strtolower($datosCte->codigo_postal));

            return redirect('cfdi/home');
        }else{
            return redirect('/cfdi/consulta')->with("error","No existen registros con los datos proporcionados");
        }
        
    }

    public function downloadFile($type, $uniqid){
        $factura = facturacion::where('uniqid',$uniqid)->first();
        $path = '';
        switch($type){
            case 'pdf':
                $path = $factura->file_pdf;
                break;
            case 'xml':
                $path = $factura->file_xml;
                break;

        }

        if(File::exists($path)){
            return response()->download($path);
        }
        
    }
}
