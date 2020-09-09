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
            $table->unsignedInteger('pay_id');
            $table->string('cigle')->unique();
            $table->string('denomination');
            $table->string('forme_juridique');
            $table->string('boite_postale')->unique();
            $table->string('ville');
            $table->string('numero_repertoire')->nullable()->unique();
            $table->string('code_contribuable')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->string('nom_gerant');
            $table->string('adresse_gerant');
            $table->string('qualification_gerant');
            $table->string('nom_professionnel_salarier')->nullable();
            $table->string('nom_expert');
            $table->string('adresse_expert');
            $table->string('nom_signataire');
            $table->string('prenom_signataire');
            $table->string('qualite_signataire');
            $table->string('numero_rue');
            $table->string('quartier');
            $table->string('numero_lot');
            $table->string('activite_principale');
            $table->string('ifu')->unique();
            $table->string('centre_impots');
            $table->string('registre_commerce')->unique();
            $table->integer('numero_cnss')->nullable()->unique();
            $table->string('telephone')->unique();
            $table->timestamps();

            $table->foreign('pay_id')->references('id')->on('pays')->onDelete('cascade');
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
