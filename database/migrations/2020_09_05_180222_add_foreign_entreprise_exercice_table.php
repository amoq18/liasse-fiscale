<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignEntrepriseExerciceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exercices', function (Blueprint $table) {
            // $table->unsignedInteger('entreprise_id')->after('id');

            $table->foreign('entreprise_id')->on('id')->references('entreprises')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exercices', function (Blueprint $table) {
            //
        });
    }
}
