<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_student');
            $table->unsignedInteger('id_teacher');
            $table->unsignedInteger('id_matter');
            $table->char('turn',10);
            $table->time('hour');
            
            $table->index(['id']);
            $table->foreign('id_student')->references('id_student')->on('students');
            $table->foreign('id_teacher')->references('id_teacher')->on('teachers');
           // $table->foreign('id_matter')->references('id')->on('matters');
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
        Schema::dropIfExists('schedules');
    }
}
