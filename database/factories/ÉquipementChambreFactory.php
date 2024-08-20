<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ÉquipementChambre;

class ÉquipementChambreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ÉquipementChambre::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'chambre_id' => $this->faker->word(),
            'nom_de_l_équipement' => $this->faker->word(),
            'description' => $this->faker->text(),
        ];
    }
}
