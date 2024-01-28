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
            $table->string("matricule");
            $table->string("civilite");
            $table->string("cin");
            $table->string("nom");
            $table->string("prenom");
            $table->string("statut");
            $table->string("filere");
            $table->string("groupe");
            $table->string("tel");
            $table->date("date_naissance");
            $table->string("type_stag");
            $table->string("niveau");
            $table->text("commentaire");
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
