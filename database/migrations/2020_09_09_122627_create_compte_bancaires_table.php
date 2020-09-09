<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteBancairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_bancaires', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('banque_id');
            $table->unsignedInteger('entreprise_id');
            $table->integer('numero');
            $table->string('intitule');
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
        Schema::dropIfExists('compte_bancaires');
    }
}
