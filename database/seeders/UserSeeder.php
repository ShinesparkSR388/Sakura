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
                'username' => 'nel',
                'email' => 'nel@email.com',
                'password' => Hash::make('sakura123'),
                'email_verified_at' => null,
                'name' => 'nelson',
                'age' => 25,
                'gender' => true,
                'photo' => 'aaaa',
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
                'name' => 'Ejemplo2',
                'age' => 25,
                'gender' => true,
                'photo' => 'aaaa',
                'country' => 'Ejemplo País',
                'address' => 'Ejemplo Dirección',
                'send_address' => 'Ejemplo Dirección de Envío',
                'refer_code' => 'S2KCV96RXF',
                'role' => 0
            ]
        ];
        DB::table('users')->insert($data); 
    }
}
