<?php

use App\Persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$persona = [
    		[
    			'id'			=>	1,
    			'nombre'		=>	'frank alejandro hidalgo lazo',
    			'email'			=> 	'backend@hotmail.com',
    			'num_documento'	=>	'73078999',
    			'telefono'		=>	'923435678',
    			'tipo_documento'=>	'DNI',
    			'direccion'		=>	'Calle 3 #546'
    		],
    		[
    			'id'			=>	2,
    			'nombre'		=>	'jorge joel yovera herrera',
    			'email'			=> 	'analista@hotmail.com',
    			'num_documento'	=>	'73078998',
    			'telefono'		=>	'923435677',
    			'tipo_documento'=>	'DNI',
    			'direccion'		=>	'Calle 4 #548'
    		],
    		[
    			'id'			=>	3,
    			'nombre'		=>	'edwin martin sandobal paucar',
    			'email'			=> 	'redes@hotmail.com',
    			'num_documento'	=>	'73078912',
    			'telefono'		=>	'923435687',
    			'tipo_documento'=>	'DNI',
    			'direccion'		=>	'Av Ecuador #325'
    		],
    		[
    			'id'			=>	4,
    			'nombre'		=>	'alonso albarado vargas',
    			'email'			=> 	'customer1@hotmail.com',
    			'num_documento'	=>	'73078123',
    			'telefono'		=>	'923435124',
    			'tipo_documento'=>	'DNI',
    			'direccion'		=>	'Av Santa union #320'
    		],
    		[
    			'id'			=>	5,
    			'nombre'		=>	'casandra caseres silupu',
    			'email'			=> 	'customer2@hotmail.com',
    			'num_documento'	=>	'73078145',
    			'telefono'		=>	'923435323',
    			'tipo_documento'=>	'DNI',
    			'direccion'		=>	'Av Santa union #314'
    		],
    		[
    			'id'			=>	6,
    			'nombre'		=>	'francisco garcia duran',
    			'email'			=> 	'customer3@hotmail.com',
    			'num_documento'	=>	'73078222',
    			'telefono'		=>	'923435090',
    			'tipo_documento'=>	'DNI',
    			'direccion'		=>	'Transversal Piura #220'
    		],
    		[
    			'id'			=>	7,
    			'nombre'		=>	'cesar avalo suncion',
    			'email'			=> 	'customer4@hotmail.com',
    			'num_documento'	=>	'73078994',
    			'telefono'		=>	'923435567',
    			'tipo_documento'=>	'DNI',
    			'direccion'		=>	'Av Juan bosco #326'
    		],
    		[
    			'id'			=>	8,
    			'nombre'		=>	'diana alverca castillo',
    			'email'			=> 	'customer5@hotmail.com',
    			'num_documento'	=>	'73078270',
    			'telefono'		=>	'923435561',
    			'tipo_documento'=>	'DNI',
    			'direccion'		=>	'Calle Aurora #457'
    		],
    		[
    			'id'			=>	9,
    			'nombre'		=>	'mercy pintado villegas',
    			'email'			=> 	'customer6@hotmail.com',
    			'num_documento'	=>	'73078669',
    			'telefono'		=>	'923435669',
    			'tipo_documento'=>	'DNI',
    			'direccion'		=>	'Calle santa clara #469'
    		],
    		[
    			'id'			=>	10,
    			'nombre'		=>	'fatima cruz merino',
    			'email'			=> 	'customer7@hotmail.com',
    			'num_documento'	=>	'73078877',
    			'telefono'		=>	'923435877',
    			'tipo_documento'=>	'DNI',
    			'direccion'		=>	'Av San Fernando #432'
    		],
    	];
        //
        Persona::insert($persona);
    }
}
