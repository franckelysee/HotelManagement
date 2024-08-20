<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id()->uniqid()->unique()->autoIncrement();
            $table->foreignId('reservation_id');
            $table->enum('methode_de_paiement', ["carte_de_credit","paypal","virement_bancaire","especes"]);
            $table->enum('statut_du_paiement', ["en_attente","complete","echoue","rembourse"]);
            $table->string('montant');
            $table->dateTime('date_du_paiement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
