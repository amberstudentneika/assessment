<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSelectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_selections', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('studentID')->unsigned();
            $table->foreign('studentID')->references('id')->on('students');
            $table->bigInteger('courseID')->unsigned();
            $table->foreign('courseID')->references('id')->on('courses');
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
        Schema::dropIfExists('course_selections');
    }
}
