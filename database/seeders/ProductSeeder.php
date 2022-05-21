<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Leche Entera',
            'price' => '50.25',
            'detail' => 'Leche',
            'photo' => '',
            'state' => '1',
            'created_at' => now(),
        ]);

        DB::table('products')->insert([
            'name' => 'Jugo de naranja',
            'price' => '15.30',
            'detail' => 'Jugo',
            'photo' => '',
            'state' => '1',
            'created_at' => now(),

        ]);

        DB::table('products')->insert([
            'name' => 'Pan',
            'price' => '0.50',
            'detail' => 'Pan integral',
            'photo' => '',
            'state' => '1',
            'created_at' => now(),
        ]);
    }
}
