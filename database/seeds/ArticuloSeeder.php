<?php

use App\Articulo;
use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$articulo = [
    		[
    			'idcategoria'		=>	1,
                'codigo'            =>  '00001',
                'stock'             =>   null,
    			'nombre'			=>	'gelatina',
    			'precio_venta'		=>	'3.00',
    			'descripcion'		=>	'piña',
    			'imagen'			=>	'1_gelatina_piña.jpg',	
    		],
    		[
    			'idcategoria'		=>	2,
                'codigo'            =>  '00002',
                'stock'             =>  null,
    			'nombre'			=>	'clasica',
    			'precio_venta'		=>	'4.00',
    			'descripcion'		=>	'pollo, papas al hilo, tomate, lechuga',
    			'imagen'			=>	'2_amburguesa_clasica.jpg',		
    		],
    		[
    			'idcategoria'		=>	3,
                'codigo'            =>  '00003',
                'stock'             =>  null,
    			'nombre'			=>	'mollejitas',
    			'precio_venta'		=>	'8.00',
    			'descripcion'		=>	'porcion pequeña',
                'imagen'            =>  '3_mollejitas.jpg',	
    		],
            [
                'idcategoria'       =>  4,
                'codigo'            =>  '00004',
                'stock'             =>  100,
                'nombre'            =>  'gaseosa 1 1/2 ml concordia',
                'precio_venta'      =>  '4.00',
                'descripcion'       =>  'gaseosa mediana',
                'imagen'            =>  '4_gaseosa_1_medio_concordia.jpg',  
            ],
            [
                'idcategoria'       =>  5,
                'codigo'            =>  '00005',
                'stock'             =>  null,
                'nombre'            =>  'jugo especial fresa con leche',
                'precio_venta'      =>  '6.00',
                'descripcion'       =>  'gaseosa mediana',
                'imagen'            =>  '5_especial_fresa_leche.jpg',  
            ],
            [
                'idcategoria'       =>  6,
                'codigo'            =>  '00006',
                'stock'             =>  60,
                'nombre'            =>  'helado de fresa 1/2 kg arcor',
                'precio_venta'      =>  '7.00',
                'descripcion'       =>  'heñado mediano con chispas de chocolate',
                'imagen'            =>  '2_amburguesa_clasica.jpg',
            ],
            [
                'idcategoria'       =>  7,
                'codigo'            =>  '00007',
                'stock'             =>  null,
                'nombre'            =>  'parrilla de cerdo',
                'precio_venta'      =>  '10.00',
                'descripcion'       =>  'fuente personal',
                'imagen'            =>  '7_parrilla_cerdo.jpg',
            ],
            [
                'idcategoria'       =>  8,
                'codigo'            =>  '00008',
                'stock'             =>  null,
                'nombre'            =>  'mixtura de carne pequeña',
                'precio_venta'      =>  '14.00',
                'descripcion'       =>  'combinado de pollo con cerdo y chuleta',
                'imagen'            =>  '8_mixtura_carne_pequeña.jpg',
            ],
            [
                'idcategoria'       =>  9,
                'codigo'            =>  '00009',
                'stock'             =>  30,
                'nombre'            =>  'cremolada de fresa en vaso 500 ml',
                'precio_venta'      =>  '5.00',
                'descripcion'       =>  'combinado de pollo con cerdo y chuleta',
                'imagen'            =>  '9_cremolada_fresa_500ml.jpg',
            ],
            [
                'idcategoria'       =>  10,
                'codigo'            =>  '00010',
                'stock'             =>  null,
                'nombre'            =>  'Combo 1',
                'precio_venta'      =>  '45.00',
                'descripcion'       =>  'parrilla de chancho, pollo a la plancha con papas + cremas',
                'imagen'            =>  '10_combo_1.jpg',
            ],
    	];
        //
        Articulo::insert($articulo);
    }
}
