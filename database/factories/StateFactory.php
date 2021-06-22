<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = State::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'extract' => $this->faker->text(250),
            'body' => $this->faker->text(500),
            'image' => 'states/' . $this->faker->image('public/storage/states', 640, 480, null, false),
        ];
    }
}
