<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_student');
            $table->unsignedInteger('id_matter');
            $table->integer('note');
            
            $table->index(['id']);
            $table->foreign('id_student')->references('id_student')->on('students');
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
        Schema::dropIfExists('notes');
    }
}
