<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sat_uso_cfdi extends Model
{
    use HasFactory;
    protected $table = 'sat_uso_cfdi';

    public function scopeGetUsoCFDIPorRegimen($query,$regimen){
        return $query->join('sat_regimen_uso_cfdi as ru','sat_uso_cfdi.id','=','ru.uso_cfdi_id')->where('ru.regimen_id',$regimen)->get();
    }
}
