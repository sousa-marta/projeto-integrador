<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->smallInteger('duration');
            $table->date('start');
            $table->date('end');
            $table->timestamps();
            $table->unsignedBigInteger('category_id'); //FK
            $table->foreign('category_id')->references('id')->on('categories'); //FK
            $table->unsignedBigInteger('company_id'); //FK
            $table->foreign('company_id')->references('id')->on('companies'); //FK
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
