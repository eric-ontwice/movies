<?php

use Illuminate\Database\Seeder;

use App\Models\Gender;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::create(['name' => 'Comedy']);

        Gender::create(['name' => 'Romance']);

        Gender::create(['name' => 'Horror']);

        Gender::create(['name' => 'Cartoon']);

        Gender::create(['name' => 'Action']);
        
        Gender::create(['name' => 'Musical']);
        
        // 2)  Agregar 3 generos más
        // 3) Agregar Seeder y Modelo de Movies con 12 películas, 2 por cada genero
    }
}
