<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'name'=> 'Proveedores',
                'info'=> 'Libros',
                'address'=> 'San Salvador',
                'contact'=> '7992-3642'
            ],
            [
                'name'=> 'Proveedores2',
                'info'=> 'Libros2',
                'address'=> 'San Salvador2',
                'contact'=> '7992-3641'
            ],
            [
                'name'=> 'Proveedores3',
                'info'=> 'Libros3',
                'address'=> 'San Salvador3',
                'contact'=> '7992-3641'
            ],
            [
                'name'=> 'Proveedores4',
                'info'=> 'Libros4',
                'address'=> 'San Salvador4',
                'contact'=> '7992-3643'
            ]
        ];
        
        DB::table('providers')->insert($data); 
    }
}
