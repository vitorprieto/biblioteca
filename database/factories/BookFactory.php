<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'publication_date' => $this->faker->date($format = 'Y-m-d'),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
