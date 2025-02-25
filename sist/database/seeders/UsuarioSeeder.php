<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
                'usuario' => 'usuario05',
                'nombre' => 'Usuario de Prueba',
                'contraseña' => Hash::make('contraseña123'), // Contraseña encriptada
                'email' => 'usuario05@example.com',
                'rol' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario' => 'usuario06',
                'nombre' => 'Otro Usuario de Prueba',
                'contraseña' => Hash::make('contraseña456'), // Contraseña encriptada
                'email' => 'usuario06@example.com',
                'rol' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}