<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Paiement;

class PaiementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paiement::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'reservation_id' => $this->faker->word(),
            'methode_de_paiement' => $this->faker->randomElement(["carte_de_cr\u00e9dit","paypal","virement_bancaire","esp\u00e8ces"]),
            'statut_du_paiement' => $this->faker->randomElement(["en_attente","compl\u00e9t\u00e9","\u00e9chou\u00e9","rembours\u00e9"]),
            'montant' => $this->faker->word(),
            'date_du_paiement' => $this->faker->dateTime(),
        ];
    }
}
