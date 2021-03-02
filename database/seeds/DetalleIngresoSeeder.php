<?php

use App\DetalleIngreso;
use Illuminate\Database\Seeder;

class DetalleIngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$detalleingreso = [
    		[
    			'id'					=> 1,
    			'idingreso'				=> 1,
    			'idarticulo'			=> 4,
    			'cantidad'				=> 100,
    			'precio'				=> 2.50,
    		],
    		[
    			'id'					=> 2,
    			'idingreso'				=> 2,
    			'idarticulo'			=> 3,
    			'cantidad'				=> 35,
    			'precio'				=> 4.00,
    		],
    		[
    			'id'					=> 3,
    			'idingreso'				=> 3,
    			'idarticulo'			=> 5,
    			'cantidad'				=> 35,
    			'precio'				=> 4.00,
    		],
    	];
        //
        DetalleIngreso::insert($detalleingreso);
    }
}
