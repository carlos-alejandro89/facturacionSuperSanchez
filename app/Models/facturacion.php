<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facturacion extends Model
{
    use HasFactory;
    protected $table = 'facturacion';
    protected $appends = ['regimen','usoCfdi','estatus'];

    public function getRegimenAttribute(){
        return $this->hasOne(sat_regimen_fiscal::class,'id','regimen_id')->first();
    }

    public function getUsoCfdiAttribute(){
        return $this->hasOne(sat_uso_cfdi::class,'id','uso_cfdi_id')->first();
    }

    public function getEstatusAttribute(){
        return $this->hasOne(estatus::class,'id','estatus_id')->first();
    }

    public function scopeGetFacturasCliente($query, $rfc, $correo){
        $cfdis = $this->join('estatus as e','facturacion.estatus_id','=','e.id')
                        ->where([['rfc',$rfc],['correo_electronico',$correo]])
                        ->selectRaw('facturacion.*, e.estatus')
                        ->get();
        return $cfdis;
    }

    public function scopeGetFacturacionSuper($query,$cveCentro, $history = 0){
        $estatus = ($history == 1) ? [3,4,5,6] : [1,2];
        $cfdis = $this->join('estatus as e','facturacion.estatus_id','=','e.id')
        ->where([['num_tienda',$cveCentro]])
        ->whereIn('estatus_id',$estatus)
        ->selectRaw('facturacion.*, e.estatus')
        ->get();
        return $cfdis;
    }
}
