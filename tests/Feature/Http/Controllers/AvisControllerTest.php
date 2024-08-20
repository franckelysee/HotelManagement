<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Avis;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\AvisController
 */
final class AvisControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\AvisController::class,
            'store',
            \App\Http\Requests\AvisControllerStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $hotel_id = $this->faker->word();
        $client_id = $this->faker->word();
        $note = $this->faker->numberBetween(-10000, 10000);
        $commentaire = $this->faker->word();

        $response = $this->post(route('avis.store'), [
            'hotel_id' => $hotel_id,
            'client_id' => $client_id,
            'note' => $note,
            'commentaire' => $commentaire,
        ]);

        $avis = Avis::query()
            ->where('hotel_id', $hotel_id)
            ->where('client_id', $client_id)
            ->where('note', $note)
            ->where('commentaire', $commentaire)
            ->get();
        $this->assertCount(1, $avis);
        $avi = $avis->first();

        $response->assertRedirect(route('hotels.show', ['hotels' => $hotels]));
    }
}
