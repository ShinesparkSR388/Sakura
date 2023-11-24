<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
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
                'id' => 1,
                'id_product' => 1,
                'id_user' => 1,
                'units' => 2,
                'unit_price' => '20',
                'sub_total' => '40'
            ],
            [
                'id' => 2,
                'id_product' => 3,
                'id_user' => 1,
                'units' => 1,
                'unit_price' => '18',
                'sub_total' => '18'
            ],
            [
                'id' => 3,
                'id_product' => 4,
                'id_user' => 1,
                'units' => 3,
                'unit_price' => '21',
                'sub_total' => '63'
            ],
            [
                'id' => 4,
                'id_product' => 6,
                'id_user' => 1,
                'units' => 2,
                'unit_price' => '18',
                'sub_total' => '36'
            ]
        ];
        DB::table('sales')->insert($data);
    }
}
