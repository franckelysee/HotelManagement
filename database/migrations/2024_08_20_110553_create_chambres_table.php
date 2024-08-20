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
        Schema::create('chambres', function (Blueprint $table) {
            $table->id()->uniqid()->unique()->autoIncrement();
            $table->foreignId('hotel_id');
            $table->string('numero_de_chambre')->unique();
            $table->enum('type_de_chambre', ["standard","deluxe","suite"]);
            $table->string('prix_par_nuit');
            $table->integer('capacite');
            $table->boolean('est_disponible');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambres');
    }
};
