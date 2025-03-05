<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
/*Agrega un archivo a la base de datos*/
class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'nombre_usuario' => 'usuario1',
            'fecha_nacimiento' => '2000-01-01',
            'correo_electronico' => 'usuario1@example.com',
            'password' => bcrypt('contraseña123'),
        ]);
    }
}
