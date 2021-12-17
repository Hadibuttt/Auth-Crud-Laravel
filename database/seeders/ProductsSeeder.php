<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Samsung Galaxy S9',
            'description' => 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung.',
            'price' => 698.88
         ]);

         DB::table('products')->insert([
            'title' => 'Apple iPhone X',
            'description' => 'GSM & CDMA FACTORY UNLOCKED! WORKS WORLDWIDE! FACTORY UNLOCKED. iPhone x 64gb.',
            'price' => 983.00
        ]);

        DB::table('products')->insert([
            'title' => 'Google Pixel 2 XL',
            'description' => 'New condition • No returns, but backed by eBay Money back guarantee',
            'price' => 675.00
        ]);

        DB::table('products')->insert([
            'title' => 'LG V10 H900',
            'description' => 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black.',
            'price' => 159.99
        ]);

        DB::table('products')->insert([
            'title' => 'Huawei Elate',
            'description' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
            'price' => 68.00
        ]);

        DB::table('products')->insert([
            'title' => 'HTC One M10',
            'description' => 'The device is in good cosmetic condition and will show minor scratches.',
            'price' => 129.99
        ]);
    }
}
