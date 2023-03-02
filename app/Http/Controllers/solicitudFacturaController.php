<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sat_regimen_fiscal;
use App\Models\sat_uso_cfdi;
use App\Models\facturacion;
use App\Models\clientes;
use App\Events\solicitudRecibidaEvent;
use App\Traits\Common;

use Carbon\Carbon;
use Session;

class solicitudFacturaController extends Controller
{
    public function index(){
        if(Session::has('RFC')){
            Session::flush();
        }
        $sat_regimen = sat_regimen_fiscal::where('activo',1)->get();
        return view('welcome',["sat_regimen" => $sat_regimen]);   
    }

    public function getUsoCFDI(Request $r){
        return response()->json(['usos_cfdi'=>sat_uso_cfdi::getUsoCFDIPorRegimen($r->regimen)]);
    }

    public function solicitaCFDI(Request $r){

        $rfc = strtoupper($r->txtRFC);
        $cliente = clientes::where('rfc',$rfc);

        $cliente = (!$cliente->exists()) ? new clientes : $cliente->first();

        $cliente->regimen_id =  $r->cmbRegimenFiscal;
        $cliente->razon_social = strtoupper($r->txtRazonSocial);
        $cliente->rfc = $rfc;
        $cliente->calle =  $r->txtCalle;
        $cliente->num_exterior =  $r->txtNumExt;
        $cliente->num_interior =  $r->txtNumInt;
        $cliente->colonia =  $r->txtColonia;
        $cliente->ciudad =  $r->txtCiudad;
        $cliente->estado =  $r->txtEstado;
        $cliente->codigo_postal =  $r->txtCodigoPostal;
        $cliente->correo_electronico =  $r->txtCorreo;

        $cliente->save();

        $Factura = new facturacion;
        $Factura->uso_cfdi_id = $r->cmbUsoCFDI;
        $Factura->regimen_id = $r->cmbRegimenFiscal;
        $Factura->estatus_id = 1;
        $Factura->fecha_ticket = Carbon::createFromFormat('d/m/Y',$r->txtFechaCompra)->format('Y-m-d');
        $Factura->num_ticket = $r->txtNumTicket;
        $Factura->num_tienda = $r->txtNumTienda;
        $Factura->num_caja = $r->txtNumCaja;
        $Factura->monto_compra = $r->txtMontoCompra;
        $Factura->razon_social = strtoupper($r->txtRazonSocial);
        $Factura->rfc = $rfc;
        $Factura->calle = $r->txtCalle;
        $Factura->num_exterior = $r->txtNumExt;
        $Factura->num_interior = $r->txtNumInt;
        $Factura->colonia = $r->txtColonia;
        $Factura->ciudad = $r->txtCiudad;
        $Factura->estado = $r->txtEstado;
        $Factura->codigo_postal = $r->txtCodigoPostal;
        $Factura->correo_electronico = $r->txtCorreo;
        $Factura->fecha_solicitud = Carbon::now()->format('Y-m-d');
        $Factura->uniqid = uniqid();
        $Factura->save();

        event(new \App\Events\solicitaFacturaEvent($Factura));
        
        return response()->json(["Datos"=>$r->all()]);
    }

    /**
     * Metodo validarTicket
     * Proposito: 1. Validar que el ticket no se haya utilizado previamente
     *            2. Validar que el ticket exista en SAP.
     * 
     * @param numTienda   Corresponde a la clave mks de la tienda
     * @param numCaja     Corresponde al numero de caja que aparece en el ticket
     * @param numTicket   Corresponde al folio del ticket
     * @param fechaTicket Corresponde a la fecha en la que se realizó la transacción de venta
     * 
     * @var vfechaTicket  Es la fecha del ticket que toma formato Y-m-d
     * 
     * @return Response->json->Titulo   Contiene titulo de respuesta
     * @return Response->json->Mensaje  Contiene una descripción más amplia de la respuesta
     * @return Response->json->TMensaje Devuelve si el proceso es exitoso (success) o de otro tipo (error, warning, info)
     * 
     */

     public function validarTicket(Request $r){
        $vfechaTicket = Common::TransformaFecha($r->fechaTicket);

        $solicitud = facturacion::where([
                             ["num_tienda",$r->numTienda],
                             ["num_caja",$r->numCaja],
                             ["num_ticket",$r->numTicket],
                             ["fecha_ticket",$vfechaTicket]
                            ]);

        if($solicitud->exists()){
                $estatus_solicitud = $solicitud->first()->estatus_id;

                if($estatus_solicitud == 1 || $estatus_solicitud == 2) return response()->json(["Titulo" => "Solicitud en proceso","Mensaje" => "Lo sentimos, el ticket proporcionado ya tiene una solicitud en proceso. El equipo le responderá en breve","TMensaje" => "warning"]);
                if($estatus_solicitud == 3 || $estatus_solicitud == 4) return response()->json(["Titulo" => "Facturado previamente","Mensaje" => "Lo sentimos, el ticket proporcionado fue facturado previamente. Si desea recuperar su factura utilice la opción Consultar Facturas","TMensaje" => "warning"]);
        }
        //Hacer llamado a la API que valida que el ticket cumpla con los criterios para para poder participar
        $numCaja = intval($r->numCaja);
        $validarTicket = json_decode(self::validateService(intval($r->numTicket), $r->numTienda, date('Ymd',strtotime($vfechaTicket)), $numCaja));

        if($validarTicket->status == true){
           /* $articulos = collect($validarTicket->articulos);
            $listaArticulos = $articulos->map(function($a){
                return $a->Art;
            });*/

           return ($validarTicket->MontoTicket == $r->montoTicket ) ? response()->json(["Titulo" => "Ticket valido","Mensaje" => "", "TMensaje" => "success"]) : response()->json(["Titulo" => "","Mensaje" => "El monto del ticket es incorrecto", "TMensaje" => "warning"]);
        }else{
            return response()->json(["Titulo" =>"","Mensaje" => $validarTicket->notes, "TMensaje" => "warning"]);    
        }


    }

    /**
     * Metodo validateService
     * Proposito: 1. Consumir el servicio que proporciona los articulos incluidos en un Ticket de venta
     * 
     * @param folioTicket Corresponde al folio del ticket 
     * @param claveCentro Corresponde a la clave mks de la tienda
     * @param fechaTicket Corresponde a la fecha en la que se realizó la transacción de venta
     * @param caja        Corresponde al numero de caja que aparece en el ticket
     * 
     * @return response Devuelve respuesta del servicio consumido y el resultado de los articulos incluidos en la consulta
     * 
     */
    public function validateService($folioTicket, $claveCentro, $fechaTicket, $caja,$totalTicket = '0'){
		$endpoint = 'http://187.217.201.2:5450/getArticulosTicket';
		$params = array(
					  'pTicket' => $folioTicket,
					  'pCentro' => $claveCentro,
					  'pFecha' => $fechaTicket,
					  'pCaja' => $caja
					  );

          $url = $endpoint . '?' . http_build_query($params);

          $API = curl_init();
          curl_setopt($API, CURLOPT_URL,$url);

          curl_setopt($API, CURLOPT_RETURNTRANSFER,true);
          curl_setopt($API, CURLOPT_SSL_VERIFYPEER, 0); // Deshabilitamos la Verificación SSL

          $Result = curl_exec($API);
          $httpCode = curl_getinfo($API,CURLINFO_HTTP_CODE);

          //Evaluamos la respuesta recibida
		  $respuestaAPI = json_decode($Result);
          switch ($httpCode) {
            case 200:              
              $response = ($respuestaAPI->status == true) ? ["notes" => $respuestaAPI->notes,"MontoTicket" => $respuestaAPI->MontoTicket, "status" => $respuestaAPI->status, "articulos" => $respuestaAPI->InfoTicket] : ["notes" => $respuestaAPI->notes, "status" => $respuestaAPI->status];
              break;
              default:
              $response = ["notes" => $respuestaAPI->notes, "status" => $respuestaAPI->status];
              break;
          }

          curl_close($API);
		  return json_encode($response);
	}
}
