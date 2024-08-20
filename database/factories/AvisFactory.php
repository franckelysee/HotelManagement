<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Avis;

class AvisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Avis::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'hotel_id' => $this->faker->word(),
            'client_id' => $this->faker->word(),
            'note' => $this->faker->numberBetween(-10000, 10000),
            'commentaire' => $this->faker->word(),
        ];
    }
}
