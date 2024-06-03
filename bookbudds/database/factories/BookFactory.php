<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $authorId = Author::inRandomOrder()->first()->id;
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'author_id' => $authorId,
            'genre' => $this->faker->word,
            'published_year' => $this->faker->year,
            'description' => $this->faker->paragraph,
        ];
    }
}
