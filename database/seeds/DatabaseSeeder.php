<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
         	PersonaSeeder::class,
         	UsersSeeder::class,
         	CategoriasSeeder::class,
            ArticuloSeeder::class,
            ProveedorSeeder::class,
         ]);
    }
}
