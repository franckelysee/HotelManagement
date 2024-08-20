<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Hotel;

class HotelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hotel::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word(),
            'adresse' => $this->faker->word(),
            'ville' => $this->faker->word(),
            'etat' => $this->faker->word(),
            'pays' => $this->faker->word(),
            'code_postal' => $this->faker->word(),
            'telephone' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'description' => $this->faker->text(),
            'note' => $this->faker->numberBetween(-10000, 10000),
            'equipements' => '{}',
        ];
    }
}
