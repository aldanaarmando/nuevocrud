<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentMattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_matters', function (Blueprint $table) {
            $table->increments('id');
            $table->String('id_matter');
            $table->date('startdate');
            $table->unsignedInteger('id_teacher');
            $table->unsignedInteger('id_student');
            
            $table->index(['id']);
            $table->foreign('id_student')->references('id_student')->on('students');
            $table->foreign('id_matter')->references('id')->on('matters');
            $table->foreign('id_teacher')->references('id_teacher')->on('teachers');
            
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
        Schema::dropIfExists('student_matters');
    }
}
