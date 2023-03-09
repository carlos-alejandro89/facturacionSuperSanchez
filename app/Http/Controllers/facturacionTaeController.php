<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\facturacion;
use App\Models\clientes;
use Carbon\Carbon;

class facturacionTaeController extends Controller
{
    public function validarTae(Request $r){
        $factura_tae = facturacion::where([["tae_autorizacion",$r->numAutorizacion],["tae_num_telefono",$r->numTelefono]])->whereIn("estatus_id",[1,2,3,4]);
        if($factura_tae->exists()){
            return response()->json(["Titulo" => "Facturado previamente","Mensaje" => "Estimado cliente, la recarga de tiempo aire fue facturada con anterioridad","TMensaje" => "warning"]);
        }

        return response()->json(["TMensaje" => "success"]);
    }

    public function generarFactura(Request $r){
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
        $Factura->monto_compra = $r->txtMontoCompra;$Factura->num_ticket = $r->txtNumTicket;
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
        $Factura->tae_autorizacion = $r->txtNumAutorizacion;
        $Factura->tae_num_telefono = $r->txtNumTelefono;
        $Factura->fecha_solicitud = Carbon::now()->format('Y-m-d');
        $Factura->uniqid = uniqid();
        $Factura->save();

        return response()->json(["TMensaje" => "success"]);
    }
}
