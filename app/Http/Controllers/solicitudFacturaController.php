<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sat_regimen_fiscal;
use App\Models\sat_uso_cfdi;
use App\Models\facturacion;
use App\Events\solicitudRecibidaEvent;

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
        $Factura->rfc = strtoupper($r->txtRFC);
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
}
