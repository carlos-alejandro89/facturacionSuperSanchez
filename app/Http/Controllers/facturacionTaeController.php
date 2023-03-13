<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\facturacion;
use App\Models\clientes;
use App\Models\sat_regimen_fiscal;
use App\Models\sat_uso_cfdi;
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
        $rfc = strtoupper(trim($r->txtRFC));

        $regimenReceptor = sat_regimen_fiscal::where('id',$r->cmbRegimenFiscal)->first();
        $usoCFDI = sat_uso_cfdi::where('id',$r->cmbUsoCFDI)->first();

        $dataForCFDI = ["Prefix" => "TAE", 
                        "FolioInterno" => "1", 
                        "CveMetodoPago" => "PUE", 
                        "MetodoPago" => "PAGO EN UNA SOLA EXHIBICION", 
                        "CveFormaPago" => "01", 
                        "FormaPago" => "EFECTIVO",
                        "Subtotal" => 100,
                        "Descuentos" => 0,
                        "Impuestos" => 16,
                        "Total" => 116,
                        "RfcEmisor" => ENV("CFDI_RFC"),
                        "Emisor" => ENV("CFDI_EMISOR"),
                        "CveRegimenEmisor" => ENV("CFDI_CVE_REGIMEN"),
                        "RegimenEmisor" => ENV("CFDI_REGIMEN"),
                        "LugarExpedicion" => ENV("CFDI_LUGAR_EXPEDICION"),
                        "RfcReceptor" => $rfc,
                        "Receptor" => strtoupper(trim($r->txtRazonSocial)),
                        "CveRegimenReceptor" => $regimenReceptor->cve_regimen,
                        "RegimenReceptor" => $regimenReceptor->desc_regimen,
                        "DomicilioFiscalReceptor" => $r->txtCodigoPostal,
                        "CveUsoCFDI" => $usoCFDI->cve_uso_cfdi,
                        "UsoCFDI" => $usoCFDI->desc_uso_cfdi
                        ];

        return response()->json($dataForCFDI);
        
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
