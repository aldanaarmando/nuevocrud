<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_teacher');
            $table->unsignedInteger('id_administrator');
            $table->date('date');
            
            $table->index(['id']);
            $table->foreign('id_teacher')->references('id_teacher')->on('teachers');
            $table->foreign('id_administrator')->references('id_administrator')->on('administrators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
