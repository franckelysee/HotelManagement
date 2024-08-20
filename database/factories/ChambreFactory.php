<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Chambre;

class ChambreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chambre::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'hotel_id' => $this->faker->word(),
            'numero_de_chambre' => $this->faker->word(),
            'type_de_chambre' => $this->faker->randomElement(["standard","deluxe","suite"]),
            'prix_par_nuit' => $this->faker->word(),
            'capacite' => $this->faker->numberBetween(-10000, 10000),
            'est_disponible' => $this->faker->boolean(),
            'description' => $this->faker->text(),
        ];
    }
}
