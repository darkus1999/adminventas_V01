<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mesa;

class MesaController extends Controller
{
    //
    public function view(Request $request){
    	$buscar = $request->buscar;
        $criterio = $request->criterio;

        if ($buscar==''){
        $mesas = Mesa::select('*')
        ->orderBy('id','asc')->paginate(3);
        }else{
        $mesas = Mesa::select('*')
        ->where($criterio, 'like', '%'. $buscar . '%')
        ->orderBy('id','asc')->paginate(3);
        }

    	return [
            'pagination' => [
                'total'        => $mesas->total(),
                'current_page' => $mesas->currentPage(),
                'per_page'     => $mesas->perPage(),
                'last_page'    => $mesas->lastPage(),
                'from'         => $mesas->firstItem(),
                'to'           => $mesas->lastItem(),
            ],
            'mesas' => $mesas
        ];
    }
    public function create(Request $request){
    	$mesa = new Mesa();
    	$mesa->numero = $request->numero;
    	$mesa->piso   = $request->piso;
    	$mesa->save();
    }
    public function update(Request $request){
    	$mesa = Mesa::findOrFail($request->id);
    	$mesa->numero = $request->numero;
    	$mesa->piso   = $request->piso;
        $mesa->estado = $request->estado;
    	$mesa->save();   
    }
    public function delete(Request $request){
        $mesa = Mesa::findOrFail($request->id);
        $mesa->eliminado = '1';
        $mesa->save();
    }
    public function active(Request $request){
        $mesa = Mesa::findOrFail($request->id);
        $mesa->eliminado = '0';
        $mesa->save();
    }
}
