<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('title', 30);
            $table->string('username', 30)->nullable();
            $table->integer('series');
            $table->boolean('gender')->unsigned();
            $table->string('contact', 200);
            $table->unsignedBigInteger('sunbreak_id');
            $table->unsignedBigInteger('user_id');
            $table->text('comment');
            $table->string('head', 30);
            $table->string('shoulder', 30);
            $table->string('arm', 30);
            $table->string('waist', 30);
            $table->string('leg', 30);
            $table->string('photo', 200);
            $table->string('photo2', 200);
            $table->string('photo3', 200)->nullable();
            $table->string('photo4', 200)->nullable();
            $table->string('photo5', 200)->nullable();
            $table->string('photo6', 200)->nullable();

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
        Schema::dropIfExists('posts');
    }
};
