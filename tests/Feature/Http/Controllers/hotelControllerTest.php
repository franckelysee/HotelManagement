<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Hotel;
use App\Models\hotel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\hotelController
 */
final class hotelControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $hotels = hotel::factory()->count(3)->create();

        $response = $this->get(route('hotels.index'));

        $response->assertOk();
        $response->assertViewIs('hotels.index');
        $response->assertViewHas('hotels');
    }


    #[Test]
    public function show_displays_view(): void
    {
        $hotel = hotel::factory()->create();
        $hotel = Hotel::factory()->create();

        $response = $this->get(route('hotels.show', $hotel));

        $response->assertOk();
        $response->assertViewIs('hotels.show');
        $response->assertViewHas('hotel');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('hotels.create'));

        $response->assertOk();
        $response->assertViewIs('hotels.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\hotelController::class,
            'store',
            \App\Http\Requests\hotelControllerStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $nom = $this->faker->word();
        $adresse = $this->faker->word();
        $ville = $this->faker->word();
        $etat = $this->faker->word();
        $pays = $this->faker->word();
        $code_postal = $this->faker->word();
        $telephone = $this->faker->word();
        $email = $this->faker->safeEmail();
        $description = $this->faker->text();
        $note = $this->faker->numberBetween(-10000, 10000);
        $equipements = $this->faker->;

        $response = $this->post(route('hotels.store'), [
            'nom' => $nom,
            'adresse' => $adresse,
            'ville' => $ville,
            'etat' => $etat,
            'pays' => $pays,
            'code_postal' => $code_postal,
            'telephone' => $telephone,
            'email' => $email,
            'description' => $description,
            'note' => $note,
            'equipements' => $equipements,
        ]);

        $hotels = Hotel::query()
            ->where('nom', $nom)
            ->where('adresse', $adresse)
            ->where('ville', $ville)
            ->where('etat', $etat)
            ->where('pays', $pays)
            ->where('code_postal', $code_postal)
            ->where('telephone', $telephone)
            ->where('email', $email)
            ->where('description', $description)
            ->where('note', $note)
            ->where('equipements', $equipements)
            ->get();
        $this->assertCount(1, $hotels);
        $hotel = $hotels->first();

        $response->assertRedirect(route('hotels.index'));
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $hotel = hotel::factory()->create();
        $hotel = Hotel::factory()->create();

        $response = $this->get(route('hotels.edit', $hotel));

        $response->assertOk();
        $response->assertViewIs('hotels.edit');
        $response->assertViewHas('hotel');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\hotelController::class,
            'update',
            \App\Http\Requests\hotelControllerUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $hotel = hotel::factory()->create();
        $nom = $this->faker->word();
        $adresse = $this->faker->word();
        $ville = $this->faker->word();
        $etat = $this->faker->word();
        $pays = $this->faker->word();
        $code_postal = $this->faker->word();
        $telephone = $this->faker->word();
        $email = $this->faker->safeEmail();
        $description = $this->faker->text();
        $note = $this->faker->numberBetween(-10000, 10000);
        $equipements = $this->faker->;

        $response = $this->put(route('hotels.update', $hotel), [
            'nom' => $nom,
            'adresse' => $adresse,
            'ville' => $ville,
            'etat' => $etat,
            'pays' => $pays,
            'code_postal' => $code_postal,
            'telephone' => $telephone,
            'email' => $email,
            'description' => $description,
            'note' => $note,
            'equipements' => $equipements,
        ]);

        $hotel->refresh();

        $response->assertRedirect(route('hotels.show', ['hotels' => $hotels]));

        $this->assertEquals($nom, $hotel->nom);
        $this->assertEquals($adresse, $hotel->adresse);
        $this->assertEquals($ville, $hotel->ville);
        $this->assertEquals($etat, $hotel->etat);
        $this->assertEquals($pays, $hotel->pays);
        $this->assertEquals($code_postal, $hotel->code_postal);
        $this->assertEquals($telephone, $hotel->telephone);
        $this->assertEquals($email, $hotel->email);
        $this->assertEquals($description, $hotel->description);
        $this->assertEquals($note, $hotel->note);
        $this->assertEquals($equipements, $hotel->equipements);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $hotel = hotel::factory()->create();
        $hotel = Hotel::factory()->create();

        $response = $this->delete(route('hotels.destroy', $hotel));

        $response->assertRedirect(route('hotels.index'));

        $this->assertModelMissing($hotel);
    }
}
