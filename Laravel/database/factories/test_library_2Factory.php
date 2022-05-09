<?php

namespace Database\Factories;

use App\Models\test_library_2;
use Illuminate\Database\Eloquent\Factories\Factory;

class test_library_2Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = test_library_2::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            '(title' => $this->faker->word,
        '(isbn' => $this->faker->word,
        '(pageCount' => $this->faker->word,
        '(publischedDate' => $this->faker->date('Y-m-d H:i:s'),
        '(thumbnailUrl' => $this->faker->word,
        '(shortDescription' => $this->faker->word,
        '(longDescription' => $this->faker->word,
        '(status' => $this->faker->word,
        '(autors' => $this->faker->word,
        '(categoris' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
