<?php

namespace Database\Factories;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shop_id' => User::all()->random()->id,
            'name' => $this->faker->word(),
            'address' => $this->faker->address(),
            'photo' => $this->faker->image(),
            'status' => $this->faker->boolean()
        ];
    }
}
