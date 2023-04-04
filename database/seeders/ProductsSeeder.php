<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Apple iphone x',
            'price' => '1000$',
            'description' => 'This mobile is so fast and fantastic',
            'category' => 'mobile',
            'gallery' => 'https://s3-storage.textopus.nl/wp-content/uploads/2017/09/12212815/iPhone-X-voorkant-water.jpg',
        ]);
    }
}
