<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Curso::class;

    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'category' => $this->faker->randomElement(['Backend','Frontend']),
            'description' => $this->faker->sentence()
        ];
    }
}
