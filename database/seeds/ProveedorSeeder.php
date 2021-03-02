<?php

use App\Proveedor;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$proveedor = [
    		[
    			'id'					=>	1,
    			'contacto'				=>	'manuel gil chacon',
    			'telefono_contacto'		=>	'976567777'
    		],
    		[
    			'id'					=>	2,
    			'contacto'				=>	'maria rubio carrasco',
    			'telefono_contacto'		=>	'976567888'
    		],
    		[
    			'id'					=>	3,
    			'contacto'				=>	'tereza fernandez madrid',
    			'telefono_contacto'		=>	'976567734'
    		],
    		[
    			'id'					=>	4,
    			'contacto'				=>	'juan hernandez perez',
    			'telefono_contacto'		=>	'976567876'
    		],
    		[
    			'id'					=>	5,
    			'contacto'				=>	'ivan mendoza zapata',
    			'telefono_contacto'		=>	'976567246'
    		],
    		[
    			'id'					=>	6,
    			'contacto'				=>	'francisco garcia lopez',
    			'telefono_contacto'		=>	'976567379'
    		],
    		[
    			'id'					=>	7,
    			'contacto'				=>	'eduardo gomes martinez',
    			'telefono_contacto'		=>	'976567568'
    		],
    		[
    			'id'					=>	8,
    			'contacto'				=>	'angel vidal suarez',
    			'telefono_contacto'		=>	'976567675'
    		],
    		[
    			'id'					=>	9,
    			'contacto'				=>	'antonio ponce bellido',
    			'telefono_contacto'		=>	'976567556'
    		],
    		[
    			'id'					=>	10,
    			'contacto'				=>	'ana romero amora',
    			'telefono_contacto'		=>	'976567661'
    		],
    	];
        //
        Proveedor::insert($proveedor);
    }
}
