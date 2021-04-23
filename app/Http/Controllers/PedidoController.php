<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Mesa;
use App\Cuenta;

class PedidoController extends Controller
{
     public function view(Request $request){
    	$buscar = $request->buscar;
        $criterio = $request->criterio;

        if ($buscar==''){
        $pedidos = Pedido::select('Pedidos.*','Users.usuario')->join('Users','Pedidos.id_usuario','=','Users.id')
        ->orderBy('id_pedido','asc')->paginate(3);
        }else{
        $pedidos = Pedido::select('*')
        ->where($criterio, 'like', '%'. $buscar . '%')
        ->orderBy('id_pedido','asc')->paginate(3);
        }
        $mesas = Mesa::select('*')
        ->where('eliminado',0)
        ->get();
    	return [
            'pagination' => [
                'total'        => $pedidos->total(),
                'current_page' => $pedidos->currentPage(),
                'per_page'     => $pedidos->perPage(),
                'last_page'    => $pedidos->lastPage(),
                'from'         => $pedidos->firstItem(),
                'to'           => $pedidos->lastItem(),
            ],
            'pedidos' => $pedidos,
            'mesas'	  => $mesas
        ];
    }
    public function create(Request $request){
        try {
    	$pedidos = new Pedido;
    	$pedidos->id_pedido = $request->id_pedido;
    	$pedidos->numero_mesa = $request->id_mesa;
    	$pedidos->id_usuario = auth()->id();
    	$pedidos->total = $request->total;
    	$pedidos->impuesto = $request->impuesto; 
    	$pedidos->save();
         }catch(Exception $e){}
    }
    public function update(Request $request){
    	$pedido = Pedido::findOrFail($request->id);
    	$pedido->numero_mesa = $request->id_mesa;
    	$pedido->save();
    }

    public function updateTotal(Request $request){
        $pedido = Pedido::findOrFail($request->id);
        $pedido->total = $request->total;
        $pedido->save();
    }

    public function delete(Request $request){
    	$pedido = Pedido::findOrFail($request->id);
    	$pedido->eliminado = '1';
    	$pedido->save();
    }
    public function active(Request $request){
    	$pedido = Pedido::findOrFail($request->id);
    	$pedido->eliminado = '0';
    	$pedido->save();
    }
    public function viewCuentas(Request $request){
        $id_pedido = $request->id_pedido;
        $cantidadcuentas = Cuenta::select('*')->where('id_pedido',$id_pedido)->count();
        if ($cantidadcuentas==0) {
            $cuentas = new Cuenta;
            $cuentas->id_pedido = $id_pedido;
            $cuentas->save();
        }
        $data = Cuenta::select('cuentas.*')
        ->where('id_pedido',$id_pedido)
        ->get();
        return['cuentas'=> $data];
    }
}
