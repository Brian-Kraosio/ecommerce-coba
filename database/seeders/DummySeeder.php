<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Checkout;
use App\Models\CheckoutItem;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Review;
use App\Models\Shipping;
use App\Models\ShippingMethod;
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
        User::factory(5)
            ->has(Shop::factory(3),'shop')
            ->create();

        Category::factory(5)
            ->has(Product::factory(10),'product')
            ->create();

        User::factory(3)->has(Cart::factory(3), 'cart')->create();

        Cart::factory(10)
            ->has(CartItem::factory(20), 'item')
            ->create();

        ShippingMethod::factory(5)
            ->has(Shipping::factory(10), 'shipping')
            ->create();

        Checkout::factory(5)->has(CheckoutItem::factory(10), 'item')->create();

        Review::factory(15)->create();

    }
}
