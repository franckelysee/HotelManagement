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
        Schema::create('équipement_chambres', function (Blueprint $table) {
            $table->id()->uniqid()->unique()->autoIncrement();
            $table->foreignId('chambre_id');
            $table->string('nom_de_l_équipement');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('équipement_chambres');
    }
};
