<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('exercice_id');
            $table->string('numero_compte')->nullable();
            $table->string('intitule_compte')->nullable();
            $table->string('deb_periode_c')->nullable();
            $table->string('deb_periode_d')->nullable();
            $table->string('mvt_periode_c')->nullable();
            $table->string('mvt_periode_d')->nullable();
            $table->string('fin_periode_c')->nullable();
            $table->string('fin_periode_d')->nullable();
            $table->string('statut')->nullable();
            $table->timestamps();

            $table->foreign('exercice_id')->references('id')->on('exercices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balances');
    }
}
