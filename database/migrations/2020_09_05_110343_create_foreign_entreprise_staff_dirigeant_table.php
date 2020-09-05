<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignEntrepriseStaffDirigeantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise_staff_dirigeant', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('entreprise_id');
            $table->unsignedInteger('staff_dirigeant_id');
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
        Schema::table('entreprise_staff_dirigeant', function (Blueprint $table) {
            //
        });
    }
}
