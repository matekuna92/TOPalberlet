<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('photo_id')->unsigned()->index();
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
            $table->string('body');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // delete-nél a user_id lesz a kulcs, és ezt párosítjuk össze az post id-vel ....
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
