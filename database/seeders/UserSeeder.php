<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'username' => 'Mark',
                'email' => 'marckZuckerberg@email.com',
                'password' => Hash::make('user123'),
                'email_verified_at' => null,
                'name' => 'Marck Zuckerberg',
                'age' => 39,
                'gender' => 'Masculino',
                'photo' => 'http://127.0.0.1:8000/api/imgUser/Perfil1.jpg',
                'country' => 'Ejemplo País',
                'address' => 'Ejemplo Dirección',
                'send_address' => 'Ejemplo Dirección de Envío',
                'refer_code' => '64ZTR2FNPQ',
                'role' => 0
            ],
            [
                'username' => 'admin',
                'email' => 'admin@email.com',
                'password' => Hash::make('sakura123'),
                'email_verified_at' => null,
                'name' => 'Nayina',
                'age' => 25,
                'gender' => 'Femenino',
                'photo' => 'http://127.0.0.1:8000/api/imgUser/admin.jpg',
                'country' => 'El Salvador',
                'address' => 'San Salvador',
                'send_address' => 'Casa presidencial',
                'refer_code' => 'S2KCV96RXF',
                'role' => 1
            ],
            [
                'username' => 'CR7',
                'email' => 'cristianoSIuuuuuuu@email.com',
                'password' => Hash::make('CR7'),
                'email_verified_at' => null,
                'name' => 'Cristiano Ronaldo',
                'age' => 38,
                'gender' => 'Masculino',
                'photo' => 'http://127.0.0.1:8000/api/imgUser/siuuuu.png',
                'country' => 'Portugal',
                'address' => 'Funchal, Portugal',
                'send_address' => 'Funchal, Portugal',
                'refer_code' => 'S2KCV96RXF',
                'role' => 0
            ]
        ];
        DB::table('users')->insert($data); 
    }
}
