<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class enviarControlador extends Controller
{
    public function enviar(Request $request){
    	$datos = $request->input('datos');
    	return $datos[0]['lat'];
    }
}
