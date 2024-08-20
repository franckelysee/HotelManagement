<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ReservationController
 */
final class ReservationControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $reservations = Reservation::factory()->count(3)->create();

        $response = $this->get(route('reservations.index'));

        $response->assertOk();
        $response->assertViewIs('reservations.index');
        $response->assertViewHas('reservations');
    }


    #[Test]
    public function show_displays_view(): void
    {
        $reservation = Reservation::factory()->create();

        $response = $this->get(route('reservations.show', $reservation));

        $response->assertOk();
        $response->assertViewIs('reservations.show');
        $response->assertViewHas('reservation');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('reservations.create'));

        $response->assertOk();
        $response->assertViewIs('reservations.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ReservationController::class,
            'store',
            \App\Http\Requests\ReservationControllerStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $hotel_id = $this->faker->word();
        $chambre_id = $this->faker->word();
        $client_id = $this->faker->word();
        $date_d_arrivee = Carbon::parse($this->faker->dateTime());
        $date_de_depart = Carbon::parse($this->faker->dateTime());
        $prix_total = $this->faker->word();
        $statut = $this->faker->randomElement(/** enum_attributes **/);

        $response = $this->post(route('reservations.store'), [
            'hotel_id' => $hotel_id,
            'chambre_id' => $chambre_id,
            'client_id' => $client_id,
            'date_d_arrivee' => $date_d_arrivee,
            'date_de_depart' => $date_de_depart,
            'prix_total' => $prix_total,
            'statut' => $statut,
        ]);

        $reservations = Reservation::query()
            ->where('hotel_id', $hotel_id)
            ->where('chambre_id', $chambre_id)
            ->where('client_id', $client_id)
            ->where('date_d_arrivee', $date_d_arrivee)
            ->where('date_de_depart', $date_de_depart)
            ->where('prix_total', $prix_total)
            ->where('statut', $statut)
            ->get();
        $this->assertCount(1, $reservations);
        $reservation = $reservations->first();

        $response->assertRedirect(route('reservations.index'));
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $reservation = Reservation::factory()->create();

        $response = $this->get(route('reservations.edit', $reservation));

        $response->assertOk();
        $response->assertViewIs('reservations.edit');
        $response->assertViewHas('reservation');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ReservationController::class,
            'update',
            \App\Http\Requests\ReservationControllerUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $reservation = Reservation::factory()->create();
        $hotel_id = $this->faker->word();
        $chambre_id = $this->faker->word();
        $client_id = $this->faker->word();
        $date_d_arrivee = Carbon::parse($this->faker->dateTime());
        $date_de_depart = Carbon::parse($this->faker->dateTime());
        $prix_total = $this->faker->word();
        $statut = $this->faker->randomElement(/** enum_attributes **/);

        $response = $this->put(route('reservations.update', $reservation), [
            'hotel_id' => $hotel_id,
            'chambre_id' => $chambre_id,
            'client_id' => $client_id,
            'date_d_arrivee' => $date_d_arrivee,
            'date_de_depart' => $date_de_depart,
            'prix_total' => $prix_total,
            'statut' => $statut,
        ]);

        $reservation->refresh();

        $response->assertRedirect(route('reservations.show', ['reservations' => $reservations]));

        $this->assertEquals($hotel_id, $reservation->hotel_id);
        $this->assertEquals($chambre_id, $reservation->chambre_id);
        $this->assertEquals($client_id, $reservation->client_id);
        $this->assertEquals($date_d_arrivee, $reservation->date_d_arrivee);
        $this->assertEquals($date_de_depart, $reservation->date_de_depart);
        $this->assertEquals($prix_total, $reservation->prix_total);
        $this->assertEquals($statut, $reservation->statut);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $reservation = Reservation::factory()->create();

        $response = $this->delete(route('reservations.destroy', $reservation));

        $response->assertRedirect(route('reservations.index'));

        $this->assertModelMissing($reservation);
    }
}
