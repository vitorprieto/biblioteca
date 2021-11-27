<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Book;

class BookInstanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'due_back' => $this->faker->date($format = 'Y-m-d'),
            'is_available' => $this->faker->boolean($chanceOfGettingTrue = 50),
            'book_id' => Book::all()->random()->id,
            'borrower_id' => User::all()->random()->id,
        ];
    }
}
