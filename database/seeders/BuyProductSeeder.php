<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuyProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buy_products')->insert([
            'id_product' => 1,
            'quantity' => 15,
            'state' => '1',
            'created_at' => now(),
        ]);
        DB::table('buy_products')->insert([
            'id_product' => 2,
            'quantity' => 55,
            'state' => '1',
            'created_at' => now(),
        ]);
        DB::table('buy_products')->insert([
            'id_product' => 3,
            'quantity' => 5,
            'state' => '1',
            'created_at' => now(),
        ]);
        DB::table('buy_products')->insert([
            'id_product' => 1,
            'quantity' => 26,
            'state' => '1',
            'created_at' => now(),
        ]);
        DB::table('buy_products')->insert([
            'id_product' => 2,
            'quantity' => 34,
            'state' => '1',
            'created_at' => now(),
        ]);
        DB::table('buy_products')->insert([
            'id_product' => 1,
            'quantity' => 23,
            'state' => '1',
            'created_at' => now(),
        ]);
    }
}
