<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $CategoryId = DB::table('categories')->pluck('id');
        return [
            'Title' => $this->faker->name(),
            'Author' => $this->faker->name(),
            'PublishDate' => now(),
            'Stock' => $this->faker->numberBetween(10, 200),
            'Image' => 'Harry Potter 1_J.K. Rowling.jpg',
            'category_id' => $this->faker->randomElement($CategoryId)
        ];
    }
}
