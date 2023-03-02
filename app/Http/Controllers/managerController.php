<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Events\notificaClienteEvent;
use App\Events\enviaFacturaEvent;
use App\Models\facturacion;
use App\Models\motivos_declina_solicitud;
use View;


class managerController extends Controller
{
    public function index(){
        $query = facturacion::getFacturacionSuper(Session::get('ACCOUNT_CENTRO'));
        $tableResults = View::make('manager.table-solicitudes',["query" => $query])->render();
        return view('manager.main',["tableResults" => $tableResults]);
    }

    public function history(){
        $query = facturacion::getFacturacionSuper(Session::get('ACCOUNT_CENTRO'),1);
        $tableResults = View::make('manager.table-historial',["query" => $query])->render();
        return view('manager.history',["tableResults" => $tableResults]);
    }

    public function informacionCfdi($uniqid){
        $facturacion = facturacion::where('uniqid',$uniqid)->first();
        if($facturacion != null){

            $facturacion->estatus_id =($facturacion->estatus_id == 1) ? 2 : $facturacion->estatus_id;
            $facturacion->save();

            $motivos = motivos_declina_solicitud::orderBy('motivo')->get();
            return view('manager.informacionCfdi',['facturacion' => $facturacion, 'motivos' => $motivos]);
        }else{
            return redirect('/manager/main')->with('error','No se encontró información');
        }
        
    }

    public function declinarSolicitud(Request $r){

        try{
            $facturacion =  facturacion::find($r->solicitud);
            $facturacion->estatus_id = 6;
            $facturacion->motivo_id = $r->motivo;
            $facturacion->save();
    
            $motivo = motivos_declina_solicitud::find($r->motivo);
    
            event(new notificaClienteEvent($facturacion, $motivo, 'Encontramos la siguiente inconsistencia en la información: '));
    
            return response()->json(["TMensaje" => "success",'Titulo' => 'Proceso satisfactorio!', 'Mensaje' => 'Usted ha declinado la solicitud con exito']);
        }catch(\Throwable $t){
            return response()->json(["TMensaje" => "warning","Mensaje"=>'Ocurrio un error, no fue posible procesar la información','Titulo'=>'Proceso truncado']);
        }
        
    }

    public function confirmarFacturacion(Request $r){
        $facturacion = facturacion::where('uniqid',$r->uniqid)->first();

        $Url = storage_path('app/public').'/'.$facturacion->rfc.'/';

		if(!\File::exists($Url)){
            $permit = 0777;
			mkdir($Url);
            chmod($Url, $permit);
		}
        
        include('Fileuploader/class.fileuploader.php');

        $FileUploader = new FileUploader('files', array(
            'limit'=>2,
            'uploadDir' => $Url,
                'extensions'=> ['xml','pdf'],
                'title'=>'factura_'.$facturacion->uniqid,
                'name'=>'factura_'.$facturacion->uniqid,
                'replace'=>true,
                'skipFileNameCheck'=>false
            ));
	
	// call to upload the files
		$upload = $FileUploader->upload();
        $fileName = '';
		$filePath = '';
        
		if ($upload['isSuccess']) {
			foreach($upload['files'] as $key => $item) {
				$upload['files'][$key] = array(
					'extension' => $item['extension'],
					'format' => $item['format'],
					'file' =>  $item['name'],
					'name' => $item['name'],
					'old_name' => $item['old_name'],
					'size' => $item['size'],
					'size2' => $item['size2'],
					'title' => $item['title'],
					'type' => $item['type'],
					'url' => asset( 'storage/'.$item['name'])
				);
                $filePath = $Url.$item['name'];
				$fileName = $item['name'];
                $extension = $item['extension'];

                if($extension == 'xml') $facturacion->file_xml = ( $Url.$item['name']); else $facturacion->file_pdf = ( $Url.$item['name']);               
                
			}			
            

            

			$json = $upload['files'];		
		}
        
        $facturacion->estatus_id = 3;
        $facturacion->save();
	//	
		
		return response()->json($upload);
    }

    public function enviarArchivos(Request $r){
        $facturacion = facturacion::where('uniqid',$r->uniqid)->first();
        event(new enviaFacturaEvent($facturacion));
        return response()->json(["TMensaje" => "success"]);
    }

    /*============================*/

    public function accessView(){
        if(Session::has('ACCOUNT_CENTRO')){
            if(Session::has('ACCOUNT_USER')){
                return redirect('/manager/main');
            }else{
                return view('auth.access');
            }
            
        }else{
            return redirect('/manager/sign-in');
        }
    }
}
