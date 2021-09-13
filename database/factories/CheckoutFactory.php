<?php

namespace Database\Factories;

use App\Models\Checkout;
use App\Models\Shipping;
use Illuminate\Database\Eloquent\Factories\Factory;

class CheckoutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Checkout::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shipping_id' => Shipping::all()->random()->id,
            'subtotal_price' => $this->faker->randomDigit(),
            'total_price' => $this->faker->randomDigitNotZero()
        ];
    }
}
