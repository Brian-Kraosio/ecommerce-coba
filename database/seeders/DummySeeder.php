<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        Shop::factory(5)->create();
        ProductType::factory(10)
            ->has(Product::factory(random_int(10,30)),'products')->create();
    }
}
