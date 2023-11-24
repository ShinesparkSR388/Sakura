<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CuponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'percent'=> 15.0,
                'value'=> 0,
                'create'=> '12/10/2023',
                'expire'=> '30/11/2023',
                'id_user'=> 1,
                'created_at'=> '2023-11-24T07:11:16.000000Z',
                'updated_at'=> '2023-11-24T07:11:16.000000Z'
            ],
            [
                'percent'=> 0,
                'value'=> 2.00,
                'create'=> '02/11/2023',
                'expire'=> '02/12/2023',
                'id_user'=> 1,
                'created_at'=> '2023-11-24T07:11:16.000000Z',
                'updated_at'=> '2023-11-24T07:11:16.000000Z'
            ],
            [
                'percent'=> 25.0,
                'value'=> 0,
                'create'=> '22/11/2023',
                'expire'=> '30/11/2023',
                'id_user'=> 2,
                'created_at'=> '2023-11-24T07:11:16.000000Z',
                'updated_at'=> '2023-11-24T07:11:16.000000Z'
            ],
            [
                'percent'=> 0,
                'value'=> 5.00,
                'create'=> '15/11/2023',
                'expire'=> '28/11/2023',
                'id_user'=> 2,
                'created_at'=> '2023-11-24T07:11:16.000000Z',
                'updated_at'=> '2023-11-24T07:11:16.000000Z'
            ]
        ];
        DB::table('cupons')->insert($data); 
    }
}
