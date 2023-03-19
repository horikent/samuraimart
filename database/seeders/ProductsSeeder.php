<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Laravel入門',
            'description' => 'Laravel初心者にもわかりやすい本です',
            'price' => '2100',
            'category_id' => '1',
            'image' => '',
            'recommend_flag' => '1',
            'carriage_flag' => '0',
        ]);

        Product::create([
            'name' => 'Javascript入門',
            'description' => 'JavaScript初心者から中級者まで',
            'price' => '2400',
            'category_id' => '1',
            'image' => '',
            'recommend_flag' => '1',
            'carriage_flag' => '1',
        ]);


        Product::create([
            'name' => 'MacBookPro',
            'description' => '最新版',
            'price' => '240000',
            'category_id' => '2',
            'image' => '',
            'recommend_flag' => '1',
            'carriage_flag' => '1',
        ]);
    }
}
