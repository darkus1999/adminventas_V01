<?php

use App\Ingreso;
use Illuminate\Database\Seeder;

class IngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$ingreso = [
    		[
    			'id'					=>	1,
    			'idproveedor'			=>	10,
    			'idusuario'				=>	3,
    			'tipo_comprobante'		=>	'boleta',
    			'serie_comprobante'		=>	'002',
    			'num_comprobante'		=>	'5467854',
    			'impuesto'				=>	0.18,
    			'total'					=>	250.00,
    			'estado'				=>	'Registrado',
    		],
    		[
    			'id'					=>	2,
    			'idproveedor'			=>	9,
    			'idusuario'				=>	3,
    			'tipo_comprobante'		=>	'boleta',
    			'serie_comprobante'		=>	'005',
    			'num_comprobante'		=>	'5467765',
    			'impuesto'				=>	0.18,
    			'total'					=>	140.00,
    			'estado'				=>	'Registrado',
    		],
            [
                'id'                    =>  3,
                'idproveedor'           =>  8,
                'idusuario'             =>  3,
                'tipo_comprobante'      =>  'boleta',
                'serie_comprobante'     =>  '003',
                'num_comprobante'       =>  '5467543',
                'impuesto'              =>  0.18,
                'total'                 =>  180.00,
                'estado'                =>  'Registrado',
            ],
    	];
        //
        Ingreso::insert($ingreso);
    }
}
