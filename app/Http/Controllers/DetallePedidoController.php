<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DetallePedido;

class DetallePedidoController extends Controller
{
    public function index(Request $request){
    	$id_cuenta = $request->id_cuenta;

    	$detallepedido = DetallePedido::select('detalle_pedidos.*','articulos.nombre')
        ->join('articulos','articulos.id','=','detalle_pedidos.id_articulo')
        ->where('id_cuenta',$id_cuenta)->get();
    	return[
    		'detallepedido'=> $detallepedido,
    	];
    }
    public function create(Request $request){
        try{
            DB::beginTransaction();
            $data = $request->articulos;
            foreach ($data  as $key => $value) {
            $detallepedido= new DetallePedido;
            $detallepedido->id_cuenta=$request->id_cuenta;   
            $detallepedido->id_usuario=$request->id_usuario;
            $detallepedido->id_articulo=$value['idarticulo'];  
            $detallepedido->precio_venta=$value['precio_venta'];    
            $detallepedido->cantidad=$value['cantidad'];    
            $detallepedido->descuento=$value['descuento'];
            $detallepedido->save();
            }
            DB::commit();
        } catch (Exception $e){
            DB::rollBack();
        }
    }
    public function update(Request $request){
        try{
            DB::beginTransaction();
            $data = $request->articulos;
            if (count($data)>0) {
                foreach ($data  as $key => $value) {
                    if (isset($value['id'])) {
                    $detallepedido= DetallePedido::findOrFail($value['id']);
                    $detallepedido->id_cuenta=$value['id_cuenta'];   
                    $detallepedido->id_usuario=$value['id_usuario'];
                    $detallepedido->id_articulo=$value['id_articulo'];  
                    $detallepedido->precio_venta=$value['precio_venta'];    
                    $detallepedido->cantidad=$value['cantidad'];    
                    $detallepedido->descuento=$value['descuento'];
                    $detallepedido->save();
                    }else{
                        $detallepedido= new DetallePedido;
                        $detallepedido->id_cuenta=$request->id_cuenta;   
                        $detallepedido->id_usuario=$request->id_usuario;
                        $detallepedido->id_articulo=$value['idarticulo'];  
                        $detallepedido->precio_venta=$value['precio_venta'];    
                        $detallepedido->cantidad=$value['cantidad'];    
                        $detallepedido->descuento=$value['descuento'];
                        $detallepedido->save();
                    }
                }
            }
            DB::commit();
        } catch (Exception $e){
            DB::rollBack();
        }
    }
    public function delete(Request $request){
        $data_eliminada = $request->articulos_eliminados;
        if (count($data_eliminada)>0) {
            foreach ($data_eliminada as $key => $value) {
                $detallepedido= DetallePedido::findOrFail($value['data']['id'])->delete();
            }
        }
    }
}
