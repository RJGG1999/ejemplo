<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tareas')->insert([
            'tarea' => 'Ejemplo 1',
            'descripcion' => 'Ejemplo de descripcion',
            'tipo' => 'Escuela',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
