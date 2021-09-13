<?php

namespace Database\Factories;

use App\Models\Shipping;
use App\Models\ShippingMethod;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShippingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shipping::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shop_id' => Shop::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'shipping_method_id' => ShippingMethod::all()->random()->id,
            'total_price' => $this->faker->randomDigitNotZero()
        ];
    }
}
