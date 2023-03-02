<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use SoapClient;
use App\Traits\Common;
use App\Models\empleados;
use App\Models\centros;

class accountsController extends Controller
{
    public function signIn(Request $r){
        $WebService  = new SoapClient("http://10.10.3.5:8081/WSGrupoSanchez.asmx?wsdl");
        $aRespuesta = $WebService->Login(["Usuario"=>$r->txtUser,"Password"=>$r->password]);

          //Convertir a formato JSON
          $jsRespuesta = json_decode($aRespuesta->LoginResult); 
          $TMensaje = 'warning';
          switch($jsRespuesta->CODIGO){
            case "404":              
              $Mensaje = 'Los datos de acceso son incorrectos.';
              break;
            case "022":
              // Usuario inactivo (Ya no labora en la empresa)
              $Mensaje = 'Usuario inactivo o dado de baja';
            break;  
            case "200":
              //Usuario Activo, puede iniciar sesión              
              if($jsRespuesta->ES_SUPER == 1){
                $TMensaje = 'success';
                $Mensaje = 'Acceso correcto';
                Session::put('ACCOUNT_CENTRO_SAP',$jsRespuesta->CLAVE_CENTRO);
                Session::put('ACCOUNT_NOMBRE_CENTRO',$jsRespuesta->NOMBRE_DPTO);
                $centros = centros::where('cve_sap',$jsRespuesta->CLAVE_CENTRO);

                 if($centros->exists()){                  
                  Session::put('ACCOUNT_CENTRO',$centros->first()->cve_merksyst);
                  $centro = $centros->first();
                  $centro->nombre_centro = $jsRespuesta->NOMBRE_DPTO;
                  $centro->save();
                 }else{
                  Session::put('ACCOUNT_CENTRO',$jsRespuesta->CLAVE_CENTRO);
                 }

              }else{
                $Mensaje =  'La cuenta de usuario no pertenece a un Súper';
              }
              break;
          }
         // return \DB::connection('HdbVentas')->select("select * from vw_Centro_SAP_MKS"); //return $Verificar;
          return response()->json(['Mensaje' => $Mensaje, 'TMensaje' => $TMensaje]);
    }

    public function signValidate(Request $r){
      $firma = $r->code_1.$r->code_2.$r->code_3.$r->code_4.$r->code_5.$r->code_6;
      $SQL = "SELECT * FROM F_FIRMAR('G_Sanchez_MX_2017','".$firma."')";
      $Verificar = DB::connection('AccountGS')->select($SQL); //return $Verificar;
      $ColabID = $Verificar[0]->COLABORADOR_ID;
      if($ColabID == -99){
        return response()->json(["Titulo"=>"Firma invalida","Usuario_ID"=>"-99","Colaborador"=>"--- --- ---","TMensaje"=>"warning","Mensaje"=>ucfirst(strtolower($Verificar[0]->MENSAJE))]);
      }
      $empleado = empleados::where('trab_id',$Verificar[0]->RFC);
      if($ColabID != -99 && !$empleado->exists()){
        $Empleado = new empleados;
        $Empleado->trab_id = $Verificar[0]->RFC;
        $Empleado->num_empleado = $Verificar[0]->RFC;
        $Empleado->nombre_completo = $Verificar[0]->COLABORADOR;
        $Empleado->save();
        $AccountUser = $Empleado->id;
      }else{
        $AccountUser = $empleado->first()->id;
      }
      

      if(sizeof($Verificar)>=1){
        
        if($ColabID == -99){
          return response()->json(["Titulo"=>"Firma invalida","Usuario_ID"=>"-99","Colaborador"=>"--- --- ---","TMensaje"=>"warning","Mensaje"=>ucfirst(strtolower($Verificar[0]->MENSAJE))]);
        }

        Session::put('ACCOUNT_USER',$AccountUser);
        Session::put('ACCOUNT_USER_FULLNAME',ucwords(strtolower(Common::TruncarString($Verificar[0]->COLABORADOR,34))));
        return response()->json([
          "TMensaje"=>"success",
          "Usuario_ID"=>$Verificar[0]->COLABORADOR_ID,
          "Colaborador"=>ucwords(strtolower(Common::TruncarString($Verificar[0]->COLABORADOR,34)))
          ]);
      }
        
    }

    public function logout(){
      Session::flush();
      return redirect('/manager/main');
    }
}
