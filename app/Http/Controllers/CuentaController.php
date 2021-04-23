<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuenta;

class CuentaController extends Controller
{
    public function updateIdClienteCuenta(Request $request){
    	$cuenta = Cuenta::findOrFail($request->id);
    	$cuenta->id_cliente = $request->id_cliente;
    	$cuenta->save();
    }
}
