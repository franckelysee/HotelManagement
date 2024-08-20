<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Chambre;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ChambreController
 */
final class ChambreControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $chambres = Chambre::factory()->count(3)->create();

        $response = $this->get(route('chambres.index'));

        $response->assertOk();
        $response->assertViewIs('chambres.index');
        $response->assertViewHas('chambres');
    }


    #[Test]
    public function show_displays_view(): void
    {
        $chambre = Chambre::factory()->create();

        $response = $this->get(route('chambres.show', $chambre));

        $response->assertOk();
        $response->assertViewIs('chambres.show');
        $response->assertViewHas('chambre');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('chambres.create'));

        $response->assertOk();
        $response->assertViewIs('chambres.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ChambreController::class,
            'store',
            \App\Http\Requests\ChambreControllerStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $hotel_id = $this->faker->word();
        $numero_de_chambre = $this->faker->word();
        $type_de_chambre = $this->faker->randomElement(/** enum_attributes **/);
        $prix_par_nuit = $this->faker->word();
        $capacite = $this->faker->numberBetween(-10000, 10000);
        $est_disponible = $this->faker->boolean();
        $description = $this->faker->text();

        $response = $this->post(route('chambres.store'), [
            'hotel_id' => $hotel_id,
            'numero_de_chambre' => $numero_de_chambre,
            'type_de_chambre' => $type_de_chambre,
            'prix_par_nuit' => $prix_par_nuit,
            'capacite' => $capacite,
            'est_disponible' => $est_disponible,
            'description' => $description,
        ]);

        $chambres = Chambre::query()
            ->where('hotel_id', $hotel_id)
            ->where('numero_de_chambre', $numero_de_chambre)
            ->where('type_de_chambre', $type_de_chambre)
            ->where('prix_par_nuit', $prix_par_nuit)
            ->where('capacite', $capacite)
            ->where('est_disponible', $est_disponible)
            ->where('description', $description)
            ->get();
        $this->assertCount(1, $chambres);
        $chambre = $chambres->first();

        $response->assertRedirect(route('chambres.index'));
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $chambre = Chambre::factory()->create();

        $response = $this->get(route('chambres.edit', $chambre));

        $response->assertOk();
        $response->assertViewIs('chambres.edit');
        $response->assertViewHas('chambre');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ChambreController::class,
            'update',
            \App\Http\Requests\ChambreControllerUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $chambre = Chambre::factory()->create();
        $hotel_id = $this->faker->word();
        $numero_de_chambre = $this->faker->word();
        $type_de_chambre = $this->faker->randomElement(/** enum_attributes **/);
        $prix_par_nuit = $this->faker->word();
        $capacite = $this->faker->numberBetween(-10000, 10000);
        $est_disponible = $this->faker->boolean();
        $description = $this->faker->text();

        $response = $this->put(route('chambres.update', $chambre), [
            'hotel_id' => $hotel_id,
            'numero_de_chambre' => $numero_de_chambre,
            'type_de_chambre' => $type_de_chambre,
            'prix_par_nuit' => $prix_par_nuit,
            'capacite' => $capacite,
            'est_disponible' => $est_disponible,
            'description' => $description,
        ]);

        $chambre->refresh();

        $response->assertRedirect(route('chambres.show', ['chambres' => $chambres]));

        $this->assertEquals($hotel_id, $chambre->hotel_id);
        $this->assertEquals($numero_de_chambre, $chambre->numero_de_chambre);
        $this->assertEquals($type_de_chambre, $chambre->type_de_chambre);
        $this->assertEquals($prix_par_nuit, $chambre->prix_par_nuit);
        $this->assertEquals($capacite, $chambre->capacite);
        $this->assertEquals($est_disponible, $chambre->est_disponible);
        $this->assertEquals($description, $chambre->description);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $chambre = Chambre::factory()->create();

        $response = $this->delete(route('chambres.destroy', $chambre));

        $response->assertRedirect(route('chambres.index'));

        $this->assertModelMissing($chambre);
    }
}
