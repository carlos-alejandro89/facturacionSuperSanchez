<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;
    protected $table = 'clientes';
//    public $fillable = ["razon_social","rfc","regimen_id","codigo_postal","correo_electronico"];
}
