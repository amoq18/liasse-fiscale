<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumeroComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numero_comptes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('banque_id');
            $table->unsignedInteger('entreprise_id');
            $table->integer('numero_compte');
            $table->timestamps();

            $table->foreign('banque_id')->references('id')->on('banques')->onDelete('cascade');
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
        Schema::dropIfExists('numero_comptes');
    }
}
