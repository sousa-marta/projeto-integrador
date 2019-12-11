<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers_donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('volunteer_id'); //FK
            $table->foreign('volunteer_id')->references('id')->on('volunteers'); //FK
            $table->unsignedBigInteger('donation_id'); //FK
            $table->foreign('donation_id')->references('id')->on('donations'); //FK

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteers_donations');
    }
}
