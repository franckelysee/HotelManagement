<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ImageHotel;

class ImageHotelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ImageHotel::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'hotel_id' => $this->faker->word(),
            'image_path' => $this->faker->word(),
            'description' => $this->faker->text(),
        ];
    }
}
