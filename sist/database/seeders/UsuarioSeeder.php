<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'usuario' => 'usuario05',
            'nombre' => 'Usuario de Prueba',
            'contraseña' => 'contraseña123', // Contraseña sin encriptar
            'email' => 'usuario05@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}