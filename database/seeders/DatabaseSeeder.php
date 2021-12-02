<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Lamar a los otros seeders para que se ejecuten
        
        //$this->call(CursoSeeder::class);

        //Agregar datos de prueba
        Curso::factory(20)->create();
        
    }
}
