<?php

namespace Database\Factories;

use App\Models\test;
use Illuminate\Database\Eloquent\Factories\Factory;

class testFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = test::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
        'post_date' => $this->faker->word,
        'body' => $this->faker->text,
        'password' => $this->faker->word,
        'token' => $this->faker->word,
        'email' => $this->faker->word,
        'author_gender' => $this->faker->randomDigitNotNull,
        'post_type' => $this->faker->word,
        'post_visits' => $this->faker->randomDigitNotNull,
        'category' => $this->faker->word,
        'category_short' => $this->faker->word,
        'is_private' => $this->faker->word,
        'writer_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
