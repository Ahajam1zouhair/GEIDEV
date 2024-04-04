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
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string("matricule")->default('-')->nullable();
            $table->string("civilite");
            $table->string("cin");
            $table->string("nom");
            $table->string("prenom");
            $table->string("statut");
            $table->string("filiere")->default('-')->nullable();
            $table->string("groupe")->default('-')->nullable();
            $table->string("tel");
            $table->string("email");
            $table->date("date_naissance");
            $table->string("type_stag");
            $table->string("niveau")->default('-')->nullable();
            $table->text('commentaire')->default('-')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};
