<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductsCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductsCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id'=>Product::all()->random(1)->first()->id,
            'category_id'=>Category::all()->random(1)->first()->id,
        ];
    }
}
