<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('city');
            $table->string('description');
            $table->float('wage',8,2);
            $table->string('status');
            $table->timestamps();
            $table->unsignedBigInteger('company_id'); //FK
            $table->foreign('company_id')->references('id')->on('companies'); //FK
            $table->unsignedBigInteger('category_id'); //FK
            $table->foreign('category_id')->references('id')->on('categories'); //FK
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
