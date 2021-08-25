<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'categories_id' => Category::all()->random()->id,
            'shop_id' => Shop::all()->random()->id,
            'type_id' => ProductType::all()->random()->id,
            'name' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'price' => $this->faker->randomDigitNotNull(),
            'quantity' => $this->faker->randomDigitNotNull(),
            'views' => $this->faker->randomDigitNotNull(),
            'discount' => $this->faker->boolean(),
            'discount_price' => $this->faker->randomDigitNotNull(),
            'status' => $this->faker->boolean()
        ];
    }
}
