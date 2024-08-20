<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ClientController
 */
final class ClientControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $clients = Client::factory()->count(3)->create();

        $response = $this->get(route('clients.index'));

        $response->assertOk();
        $response->assertViewIs('client.index');
        $response->assertViewHas('client');
    }


    #[Test]
    public function show_displays_view(): void
    {
        $client = Client::factory()->create();

        $response = $this->get(route('clients.show', $client));

        $response->assertOk();
        $response->assertViewIs('client.show');
        $response->assertViewHas('client');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('clients.create'));

        $response->assertOk();
        $response->assertViewIs('client.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ClientController::class,
            'store',
            \App\Http\Requests\ClientControllerStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $prenom = $this->faker->word();
        $nom = $this->faker->word();
        $email = $this->faker->safeEmail();
        $telephone = $this->faker->word();
        $adresse = $this->faker->word();
        $ville = $this->faker->word();
        $etat = $this->faker->word();
        $pays = $this->faker->word();
        $code_postal = $this->faker->word();

        $response = $this->post(route('clients.store'), [
            'prenom' => $prenom,
            'nom' => $nom,
            'email' => $email,
            'telephone' => $telephone,
            'adresse' => $adresse,
            'ville' => $ville,
            'etat' => $etat,
            'pays' => $pays,
            'code_postal' => $code_postal,
        ]);

        $clients = Client::query()
            ->where('prenom', $prenom)
            ->where('nom', $nom)
            ->where('email', $email)
            ->where('telephone', $telephone)
            ->where('adresse', $adresse)
            ->where('ville', $ville)
            ->where('etat', $etat)
            ->where('pays', $pays)
            ->where('code_postal', $code_postal)
            ->get();
        $this->assertCount(1, $clients);
        $client = $clients->first();

        $response->assertRedirect(route('client.index'));
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $client = Client::factory()->create();

        $response = $this->get(route('clients.edit', $client));

        $response->assertOk();
        $response->assertViewIs('client.edit');
        $response->assertViewHas('client');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ClientController::class,
            'update',
            \App\Http\Requests\ClientControllerUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $client = Client::factory()->create();
        $prenom = $this->faker->word();
        $nom = $this->faker->word();
        $email = $this->faker->safeEmail();
        $telephone = $this->faker->word();
        $adresse = $this->faker->word();
        $ville = $this->faker->word();
        $etat = $this->faker->word();
        $pays = $this->faker->word();
        $code_postal = $this->faker->word();

        $response = $this->put(route('clients.update', $client), [
            'prenom' => $prenom,
            'nom' => $nom,
            'email' => $email,
            'telephone' => $telephone,
            'adresse' => $adresse,
            'ville' => $ville,
            'etat' => $etat,
            'pays' => $pays,
            'code_postal' => $code_postal,
        ]);

        $client->refresh();

        $response->assertRedirect(route('client.show', ['client' => $client]));

        $this->assertEquals($prenom, $client->prenom);
        $this->assertEquals($nom, $client->nom);
        $this->assertEquals($email, $client->email);
        $this->assertEquals($telephone, $client->telephone);
        $this->assertEquals($adresse, $client->adresse);
        $this->assertEquals($ville, $client->ville);
        $this->assertEquals($etat, $client->etat);
        $this->assertEquals($pays, $client->pays);
        $this->assertEquals($code_postal, $client->code_postal);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $client = Client::factory()->create();

        $response = $this->delete(route('clients.destroy', $client));

        $response->assertRedirect(route('client.index'));

        $this->assertModelMissing($client);
    }
}
