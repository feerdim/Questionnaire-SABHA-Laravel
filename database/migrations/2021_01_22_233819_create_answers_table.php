<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('respondens_id')->unsigned();
            $table->bigInteger('questions_id')->unsigned();
            $table->boolean('answer');
            $table->foreign('respondens_id')->references('id')->on('respondens')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('questions_id')->references('id')->on('questions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
