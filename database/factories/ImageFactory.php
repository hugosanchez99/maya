<?php

namespace Database\Factories;

use App\Models\image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'places/' . $this->faker->image('public/storage/places', 640, 480, null, false)
        ];
    }
}
