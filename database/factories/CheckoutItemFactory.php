<?php

namespace Database\Factories;

use App\Models\Checkout;
use App\Models\CheckoutItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class CheckoutItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CheckoutItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::all()->random()->id,
            'checkout_id' => Checkout::all()->random()->id,
            'item_quantity' => $this->faker->numberBetween(1,10),
            'item_price' => $this->faker->randomDigitNotZero(),
        ];
    }
}
