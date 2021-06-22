<?php

namespace Database\Factories;

use App\Models\Place;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Place::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'extract' => $this->faker->text(250),
            'body' => $this->faker->text(2500),
        ];
    }
}
