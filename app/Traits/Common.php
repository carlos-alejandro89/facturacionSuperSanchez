<?php
namespace App\Traits;
use Exception;
use Illuminate\Request;
use Carbon\Carbon;
use App\Models\estatus;

trait Common{
public static function elapsedTime($actionDate){
    $today = Carbon::now();
    $actionDate = Carbon::parse($actionDate);
    $diferencia = $today->diffInYears($actionDate);
    if($diferencia >= 1){
        return 'Hace '.$diferencia.' años';
    }

    $diferencia = $today->diffInMonths($actionDate);
    if($diferencia >= 1){
        return 'Hace '.$diferencia.' meses';
    }

    $diferencia = $today->diffInweeks($actionDate);
    if($diferencia >= 1){
        return 'Hace '.$diferencia.' semanas';
    }
    $diferencia = $today->diffInDays($actionDate);
    if($diferencia >= 1){
        return 'Hace '.$diferencia.' días';
    }

    $diferencia = $today->diffInHours($actionDate);
    if($diferencia >= 1){
        return 'Hace '.$diferencia.' horas';
    }

    $diferencia = $today->diffInMinutes($actionDate);
    if($diferencia >= 1){
        return 'Hace '.$diferencia.' minutos';
    }

    return 'Hace un momento';
}

public static function labelEstatus($estatus_id){
	try{
		$estatus = estatus::where('id',$estatus_id)->get()->first()->estatus;
		$labels = ["EN PROCESO" => "warning","FACTURA SOLICITADA" => "primary",	"FACTURADO" => "success", "FACTURADO PREVIAMENTE" => "orange", "FACTURA CANCELADA" => "danger", "DECLINADA" => "danger", "ATENDIDO" => "success", "CERRADO" => "success", "ENVIADO" => "success"];
		return '<div class="badge badge-lg badge-light-'.$labels[$estatus].'">'.ucfirst(strtolower($estatus)).'</div>';
	}catch(\Thorwable $r){
	    return '<div class="badge badge-lg badge-light-gray">'.ucfirst(strtolower($estatus)).'</div>';
	}
	

}

public static function randomPassword($Tam){
$caracteres = "JwbOCFRvB3Vh2MfdWeT9Pu71xHaQ4cYqjk5X0rnGyzSUDstlmIi6Z8oEAgNKLp";
		$cadena = ""; //variable para almacenar la cadena generada
		for($i=1;$i<$Tam;$i++)
		{
		 $cadena .= substr($caracteres,rand(0,63),1); /*Extraemos 1 caracter de los caracteres
		entre el rango 0 a Numero de letras que tiene la cadena */
		}
		return $cadena;
}

/*=======================================================================*/

public static function CodigoAuth($Prefix){
	$Tam = 2;
  $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$cadena =strtoupper( $Prefix.uniqid()); //variable para almacenar la cadena generada
		/*for($i=1;$i<($Tam-strlen($cadena));$i++)
		{
		 $cadena .= substr($caracteres,rand(0,strlen($caracteres)-1),1); /*Extraemos 1 caracter de los caracteres
		entre el rango 0 a Numero de letras que tiene la cadena 
	}*/

    $NCadena = '';
		for($x=0;$x<=19;$x++){
			if (in_array($x,array(4,8,12))){
				$NCadena .='-';
			}
			$NCadena .= substr($cadena,$x,1);
		}
		return $NCadena;
}

/*=======================================================================*/

public static function encrypt1($string, $key) {
   $result = '';
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)+ord($keychar));
      $result.=$char;
   }
   return base64_encode($result);
}

/*=======================================================================*/

public static function decrypt1($string, $key) {
   $result = '';
   $string = base64_decode($string);
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)-ord($keychar));
      $result.=$char;
   }
   return $result;
}

/*=======================================================================*/

public static function TransformaFecha($Fecha){
	$datetime = $Fecha; //01/12/2016
	$dd = substr($datetime,0,2);
	$mm = substr($datetime,3,2);
	$yyyy = substr($datetime,6,9);
	return $yyyy.'-'.$mm.'-'.$dd;
}
/*=======================================================================*/
public static function FormateaFecha($Fecha){
			$Fecha="{ts'".$Fecha." 00:00:00'}";
			return $Fecha;
	}
/*=======================================================================*/
public static function FechaMSSQL(){
			date_default_timezone_set('America/Mexico_City');
			$Fecha="{ts'".date('Y')."-".date('m')."-".date('d')." ".date('H').":".date('i').":".date('s')."'}";
			return $Fecha;
	}
/*=======================================================================*/

public static function QuotedLike($String){
	$String=(QuitarEspacios($String));
	$QuotedString="'%".$String."%'";
	return $QuotedString;
	}

/*=======================================================================*/
public static function QuotedStr($String){
	$String=(QuitarEspacios($String));
	$QuotedString="'".$String."'";
	return $QuotedString;
	}
/*=======================================================================*/
public static function QuitarEspacios($Original){
	$Original=trim($Original);
	$Ncaract=strlen($Original);
	$Flag=0;
	$NCadena='';

	for($x=0;$x<$Ncaract;$x++){
			if ($Flag==0){
				$NCadena=$NCadena.$Original[$x];
				}else{
						if ($Original[$x]!=' '){//if 2
							$NCadena=$NCadena.$Original[$x];
							}//If 2
					}

			if($Original[$x]==' '){
				$Flag=1;
				}else{
					$Flag=0;
					}
		}
		$NCadena=utf8_decode($NCadena);
		return $NCadena;

	}	//End function QuitarEspacios
/*=======================================================================*/
public static function CorregirRFC($RFC){
	$NRFC='';
	$RFC=trim($RFC);
	$Num=strlen($RFC);
for($x=0;$x<$Num;$x++){
	if ($RFC[$x]!='-'&&$RFC[$x]!=' '){
		$NRFC=$NRFC.$RFC[$x];
		}
	}

	return $NRFC;

	}
/*=======================================================================*/
public static function EvaluaFecha($Year,$Month,$Day){
	//Esta funcion es valida para saber si una fecha introducida es valida
			//Meses con 31 dias: 01,03,05,07,08,10,12
		//Meses con 30 dias:04,06,09,11
		//Meses con al menos 29 dias:02
	$Respuesta='Formato en fecha incorrecto';
	if (is_numeric($Year)){
		 if($Year>=0 && $Year<=99){
             if(is_numeric($Month)){
                 if($Month>=1 && $Month<=12){
                     if(is_numeric($Day)){
                         if ($Day>31){
                             $Respuesta='El Día '.$Day.' del mes '.$Month.' no existe. El dato es incorrecto';
                         }
                         else
                         {
                             if($Month==2&&$Day>29){
                                 $Respuesta='Febrero solo tiene hasta 29 días';
                             }else{
                                 if($Month==4&&$Day>30 || $Month==6 && $Day>30 || $Month==9&&$Day>30 ||$Month==11 &&$Day>30){
                                     $Respuesta='Este mes solo tiene 30 días';
                                 }else{
                                     $Respuesta='OK';
                                 }
                             }//
                         }
                     }else{
                         $Respuesta='Formato Incorrecto: Día';
                     }
                 }
                 else {
                     $Respuesta = 'Formato Incorrecto: Mes';
                 }
             }
			 }
		}
		else
		{
		  $Respuesta='Formato incorrecto:Año';
		}


return $Respuesta;
}

/*=======================================================================*/
public static function validaRFC($RFC){

	// Validar Longitud de RFC

	$RFC=trim($RFC);
	$Long=strlen($RFC);
	if ($Long>13){
		$Respuesta='RFC tiene más de 13 Caracteres';
		}
		else{
			if ($Long<12){
				$Respuesta='Minimo 12 Caracteres para RFC';
				}
		     }

	//Decomponer RFC segun la longitud
	switch($Long){
		case 13:
			$Principal=substr($RFC,0,4);
			$Fecha=substr($RFC,4,6);
			$HomoClave=substr($RFC,10,3);
			//Validar los primeros 4 caracteres sean letras
			for($x=0;$x<=3;$x++){
				$Evalua=substr($Principal,$x,1);
				if(is_numeric($Evalua)){
					$Fase1='RFC Invalido: Caracter no permitido en Principal(Posicion:'.$x.' - Valor:'.$Evalua.')';
					break;
					}
					$Fase1='OK';
				}
			//Agrupar la fecha en grupos de 2 y validar se encuentre dentro de los valores permitidos
			$Fase2= self::EvaluaFecha(substr($Fecha,0,2),substr($Fecha,2,2),substr($Fecha,4,2));
			if($Fase1=='OK' && $Fase2=='OK'){
			$Respuesta= 'OK';
		}else {
			if ($Fase1!='OK') {
				$Respuesta = $Fase1;
			}
			if ($Fase2!='OK') {
				$Respuesta = $Fase2;
			}
		}


		break;
		case 12:
			$Principal=substr($RFC,0,3);
			$Fecha=substr($RFC,3,6);
			$HomoClave=substr($RFC,9,3);
			//Validar los primeros 3 Caracteres que sean letras
			for($x=0;$x<=2;$x++){
				$Evalua=substr($Principal,$x,1);
				if(is_numeric($Evalua)){
					$Fase1='RFC Invalido: Caracter no permitido en Principal(Posicion:'.$x.' - Valor:'.$Evalua.')';
					break;
					}
					$Fase1='OK';
				}
			//Agrupar la fecha en grupos de 2 y validar se encuentre dentro de los valores permitidos
			$Fase2=self::EvaluaFecha(substr($Fecha,0,2),substr($Fecha,2,2),substr($Fecha,4,2));
			if($Fase1=='OK' && $Fase2=='OK'){
			$Respuesta= 'OK';
			}else {
			if ($Fase1!='OK') {
				$Respuesta = $Fase1;
			}
			if ($Fase2!='OK') {
				$Respuesta = $Fase2;
			}
			}
		break;
		}

	return($Respuesta);
	}

	/*=================================================================*/

	public static function obtenerFechaEnLetra($fecha){
    $dia= self::conocerDiaSemanaFecha($fecha);
    $num = date("j", strtotime($fecha));
    $anno = date("Y", strtotime($fecha));
    $mes = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
    $mes = $mes[(date('m', strtotime($fecha))*1)-1];
    return $dia.', '.$num.' de '.$mes.' del '.$anno;
}

/*=================================================================*/

public static function conocerDiaSemanaFecha($fecha) {
    $dias = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
    $dia = $dias[date('w', strtotime($fecha))];
    return $dia;
}

/*=================================================================*/

public static function TruncarString($string, $limit, $break=".", $pad="...")
{
  if(strlen($string) <= $limit) return $string;

  $string = substr($string, 0, $limit);
  if(false !== ($breakpoint = strrpos($string, $break))) {
    $string = substr($string, 0, $breakpoint);
  }

  return $string . $pad;
}

/*===============================================================*/

public static function validarCorreo($str)
{
  return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
}
}
?>
