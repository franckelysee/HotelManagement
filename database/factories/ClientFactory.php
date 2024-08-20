<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'prenom' => $this->faker->word(),
            'nom' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'telephone' => $this->faker->word(),
            'adresse' => $this->faker->word(),
            'ville' => $this->faker->word(),
            'etat' => $this->faker->word(),
            'pays' => $this->faker->word(),
            'code_postal' => $this->faker->word(),
        ];
    }
}
