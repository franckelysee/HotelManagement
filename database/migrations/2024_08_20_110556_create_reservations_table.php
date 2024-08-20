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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->uniqid()->unique()->autoIncrement();
            $table->foreignId('hotel_id');
            $table->foreignId('chambre_id');
            $table->foreignId('client_id');
            $table->dateTime('date_d_arrivee');
            $table->dateTime('date_de_depart');
            $table->string('prix_total');
            $table->enum('statut', ["en_attente","confirme","annule","enregistre","parti"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
