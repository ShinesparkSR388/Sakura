<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CuponsSeeder extends Seeder
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
                'percent'=> 15.0,
                'value'=> 0,
                'create'=> '12/10/2023',
                'expire'=> '30/11/2023',
                'id_user'=> 1,
            ],
            [
                'percent'=> 0,
                'value'=> 2.00,
                'create'=> '02/11/2023',
                'expire'=> '02/12/2023',
                'id_user'=> 1,
            ],
            [
                'percent'=> 25.0,
                'value'=> 0,
                'create'=> '22/11/2023',
                'expire'=> '30/11/2023',
                'id_user'=> 2,
            ],
            [
                'percent'=> 0,
                'value'=> 14.00,
                'create'=> '15/11/2023',
                'expire'=> '28/11/2023',
                'id_user'=> 2,
            ],
        ];
    }
}
