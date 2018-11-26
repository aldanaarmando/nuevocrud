<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('name');
            $table->char('last_name',30);
            $table->date('birthdate');
            $table->char('adress',30);
            $table->integer('phone');
            $table->char('type',20);
            $table->char('email',30);
            $table->char('password',20);
            $table->index(['id']);
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
        Schema::dropIfExists('people');
    }
}
