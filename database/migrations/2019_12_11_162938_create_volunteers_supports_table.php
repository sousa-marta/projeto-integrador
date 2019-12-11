<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers_supports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('volunteer_id'); //FK
            $table->foreign('volunteer_id')->references('id')->on('volunteers'); //FK
            $table->unsignedBigInteger('support_id'); //FK
            $table->foreign('support_id')->references('id')->on('supports'); //FK

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteers_supports');
    }
}
