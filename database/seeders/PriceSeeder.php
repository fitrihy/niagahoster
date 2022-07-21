<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('price')->insert([
            'id' => 1,
            'title' => 'Bayi',
            'btn_title' => 'Pilih Sekarang',
            'price' => 27800,
            'discount_price' => 19800,
            'jumlah_user' => 2154,
        ]);
        DB::table('price')->insert([
            'id' => 2,
            'title' => 'Pelajar',
            'btn_title' => 'Pilih Sekarang',
            'price' => 64800,
            'discount_price' => 44800,
            'jumlah_user' => 7098,
        ]);
        DB::table('price')->insert([
            'id' => 3,
            'title' => 'Personal',
            'btn_title' => 'Pilih Sekarang',
            'price' => 104250,
            'discount_price' => 67800,
            'jumlah_user' => 15487,
        ]);
        DB::table('price')->insert([
            'id' => 4,
            'title' => 'Bisnis',
            'btn_title' => 'Diskon 40%',
            'price' => 153800,
            'discount_price' => 91800,
            'jumlah_user' => 6030,
        ]);
    }
}
