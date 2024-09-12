<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ["name" => "Orange", "cost" => 50000000, "amount" => 27],
            ["name" => "Banana", "cost" => 120000000, "amount" => 17],
            ["name" => "Bread", "cost" => 70000000, "amount" => 0],
            ["name" => "Apple", "cost" => 1200000000, "amount" => 12],
        
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
