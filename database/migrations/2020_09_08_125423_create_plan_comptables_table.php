<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanComptablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_comptables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_compte')->nullable();
            $table->string('poste')->nullable();
            $table->string('intitule_compte')->nullable();
            $table->string('nature')->nullable();
            $table->string('solde_debit')->nullable();
            $table->string('solde_credit')->nullable();
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
        Schema::dropIfExists('plan_comptables');
    }
}
