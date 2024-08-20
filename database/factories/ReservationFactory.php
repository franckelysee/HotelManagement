<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Reservation;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'hotel_id' => $this->faker->word(),
            'chambre_id' => $this->faker->word(),
            'client_id' => $this->faker->word(),
            'date_d_arrivee' => $this->faker->dateTime(),
            'date_de_depart' => $this->faker->dateTime(),
            'prix_total' => $this->faker->word(),
            'statut' => $this->faker->randomElement(["en_attente","confirm\u00e9","annul\u00e9","enregistr\u00e9","parti"]),
        ];
    }
}
