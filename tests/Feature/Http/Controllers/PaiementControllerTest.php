<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Paiement;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PaiementController
 */
final class PaiementControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PaiementController::class,
            'store',
            \App\Http\Requests\PaiementControllerStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $reservation_id = $this->faker->word();
        $methode_de_paiement = $this->faker->randomElement(/** enum_attributes **/);
        $statut_du_paiement = $this->faker->randomElement(/** enum_attributes **/);
        $montant = $this->faker->word();
        $date_du_paiement = Carbon::parse($this->faker->dateTime());

        $response = $this->post(route('paiements.store'), [
            'reservation_id' => $reservation_id,
            'methode_de_paiement' => $methode_de_paiement,
            'statut_du_paiement' => $statut_du_paiement,
            'montant' => $montant,
            'date_du_paiement' => $date_du_paiement,
        ]);

        $paiements = Paiement::query()
            ->where('reservation_id', $reservation_id)
            ->where('methode_de_paiement', $methode_de_paiement)
            ->where('statut_du_paiement', $statut_du_paiement)
            ->where('montant', $montant)
            ->where('date_du_paiement', $date_du_paiement)
            ->get();
        $this->assertCount(1, $paiements);
        $paiement = $paiements->first();

        $response->assertRedirect(route('reservations.show', ['reservations' => $reservations]));
    }
}
