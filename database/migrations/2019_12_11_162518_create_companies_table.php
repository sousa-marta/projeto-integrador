<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('logo');
            $table->string('description', 400);
            $table->string('POC');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->integer('address_number');
            $table->string('complement')->nullable();
            $table->string('zip');
            $table->string('city');
            $table->string('state');
            $table->unsignedBigInteger('location_id'); //FK
            $table->foreign('location_id')->references('id')->on('locations'); //FK
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
        Schema::dropIfExists('companies');
    }
}
