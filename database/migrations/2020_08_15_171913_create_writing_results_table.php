<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritingResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writing_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('writing_answer_id');
            $table->foreign('writing_answer_id')->references('id')->on('writing_answers');
            $table->unsignedBigInteger('examiner_id');
            $table->unsignedBigInteger('lecture_id');
            $table->tinyInteger('type');
            $table->integer('point');
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('writing_results');
    }
}
