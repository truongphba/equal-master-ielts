<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('lecture_id')->nullable();
            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('lecture_id')->references('id')->on('users');
            $table->integer('listen_point');
            $table->integer('read_point');
            $table->integer('speak_point');
            $table->integer('write_point');
            $table->text('speak_comment')->nullable();
            $table->text('write_comment')->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('results');
    }
}
