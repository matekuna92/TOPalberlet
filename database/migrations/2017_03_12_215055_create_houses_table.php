<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('city');
            $table->string('street');
            $table->string('type');
            $table->string('category');
            $table->integer('price')->unsigned()->index();
            $table->integer('size')->unsigned()->index();
            $table->integer('rooms')->unsigned()->index();
            $table->string('empty');
            $table->string('housetype');
            $table->string('heating');

            $table->integer('photo_id');




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
        Schema::dropIfExists('houses');
    }
}
