<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('entreprise_id');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->date('exercice_precedent');
            $table->integer('impot_minimum');
            $table->integer('taux_proportionnel');
            $table->integer('taux_impot');
            $table->string('liasse_comptable');
            $table->string('liasse_fiscale');

            $table->timestamps();

            $table->foreign('entreprise_id')->references('id')->on('entreprises')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercices');
    }
}
