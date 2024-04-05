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

        Schema::create('formateurs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->string('photo');
            $table->string('grade');
            $table->date('date_naissance');
            $table->date('date_recrutement');
            $table->string('poste');
            $table->string('tel');
            $table->string('email');
            $table->string('password');
            $table->foreignId('etablissement_id')->constrained();
            $table->foreignId('metier_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formateurs');
    }
};
