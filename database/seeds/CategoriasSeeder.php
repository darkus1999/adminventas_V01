<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categoria = [
    		[
    			'nombre'			=>	'postres',
    			'descripcion'		=>	'gelatina, mazamorra'
    		],
    		[
    			'nombre'			=>	'amburguesas',
    			'descripcion'		=>	'clasica, monkey'
    		],
    		[
    			'nombre'			=>	'antojitos',
    			'descripcion'		=>	'mollejitas, salchipapas, salchipollo'
    		],
    		[
    			'nombre'			=>	'gaseosas',
    			'descripcion'		=>	'personal, familiar'
    		],
    		[
    			'nombre'			=>	'jugos',
    			'descripcion'		=>	'clasico, especial'
    		],
    		[
    			'nombre'			=>	'helados',
    			'descripcion'		=>	'artesanales'
    		],
            [
                'nombre'            =>  'parrillas',
                'descripcion'       =>  'parrilladas, anticuchos'
            ],
            [
                'nombre'            =>  'Mixturas',
                'descripcion'       =>  'combinacios de platillos'
            ],
            [
                'nombre'            =>  'Cremoladas',
                'descripcion'       =>  'fruta'
            ],
            [
                'nombre'            =>  'Combos',
                'descripcion'       =>  'chico, mediano, grande'
            ],
    	];
        //
        Categoria::insert($categoria);
    }
}
