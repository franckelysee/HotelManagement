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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id()->uniqid()->unique()->autoIncrement();
            $table->string('nom');
            $table->string('adresse');
            $table->string('ville');
            $table->string('etat');
            $table->string('pays');
            $table->string('code_postal');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->string('description');
            $table->integer('note');
            $table->json('equipements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
