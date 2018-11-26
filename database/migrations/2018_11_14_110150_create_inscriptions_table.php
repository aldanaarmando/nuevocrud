<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_student');
            $table->unsignedInteger('id_administrator');
            $table->string('charge');
            $table->date('date');
            
            $table->index(['id']);
            $table->foreign('id_student')->references('id_student')->on('students');
            $table->foreign('id_administrator')->references('id_administrator')->on('administrators');
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
        Schema::dropIfExists('inscriptions');
    }
}
