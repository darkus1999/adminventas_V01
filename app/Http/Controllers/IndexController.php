<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Articulo;

class IndexController extends Controller
{
	public function showIndex() {
		$Categorias = Categoria::all();
		$Productos = Articulo::all();
		return view('cliente.preview', compact('Categorias','Productos'));
	}
    //
}
