<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cigle');
            $table->string('denomination');
            $table->string('forme_juridique');
            $table->string('boite_postale');
            $table->string('ville');
            $table->integer('numero_repertoire')->nullable();
            $table->integer('code_contribuable')->nullable();
            $table->string('email')->nullable();
            $table->string('nom_gerant');
            $table->string('adresse_gerant');
            $table->string('qualification_gerant');
            $table->string('nom_professionnel_salarier')->nullable();
            $table->string('nom_expert');
            $table->string('adresse_expert');
            $table->string('nom_signataire');
            $table->string('prenom_signataire');
            $table->string('qualite_signataire');
            $table->integer('numero_rue');
            $table->string('quartier');
            $table->integer('numero_lot');
            $table->string('activite_principale');
            $table->integer('ifu');
            $table->string('centre_impots');
            $table->string('registre_commerce');
            $table->integer('numero_cnss')->nullable();
            $table->string('telephone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
}
