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
use App\Models\UserAddress;
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
            ->has(Shop::factory(random_int(1,2)),'shop')
            ->create();

        Category::factory(5)
            ->has(Product::factory(random_int(5,10))
                ->has(Review::factory(random_int(2,10)),'review'),'product')
            ->create();

        User::factory(3)
            ->has(Cart::factory(1)
                ->has(CartItem::factory(random_int(2,10)), 'item'), 'cart')->create();


        ShippingMethod::factory(5)
            ->has(Shipping::factory(random_int(1,5)), 'shipping')
            ->create();

        Checkout::factory(5)->has(CheckoutItem::factory(random_int(1,5)), 'item')->create();

        UserAddress::factory(10)->create();

    }
}
