<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use App\contacto;
use DB;


class enviarController extends Controller
{
    public function enviarConsulta(Request $request){
    	$consulta= new contacto;
        $consulta->nombre = $request->input('nombre');
        $consulta->email = $request->input('email');
        $consulta->comentario = $request->input('comentario');

        $consulta->save();
    	return 'Se ha realizado el insert correctamente.';
    }
}
