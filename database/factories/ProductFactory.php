<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{

    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category_name =  $this->faker->unique()->words($nb=2,$asText=true);
        $slug =Str::slug($category_name);

        return [
            'name' => $category_name,
            'slug' => $slug,
            'short_desc' => $this->faker->text(200),
            'desc' => $this->faker->text(500),
            'regular_price'=>$this->faker->numberBetween(100,500),
            'SKU' =>'SKU'.$this->faker->unique()->numberBetween(1,50),
            'stock_status' => 'instock',
            'featured' => true,
            'quantity' => $this->faker->numberBetween(1,100),
            'image' => 'digital_0'.$this->faker->unique()->numberBetween(1,30).'.jpg',
            'category_id' => $this->faker->numberBetween(1,5)
        ];
    }
}
