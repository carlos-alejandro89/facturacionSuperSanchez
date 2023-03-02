<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;

class clientesController extends Controller
{
    public function getInfo(Request $r){
        $cliente = clientes::where('rfc',$r->rfc);

        $response = ($cliente->exists()) ? $cliente->first() : false;

        return $response;
    }
}
