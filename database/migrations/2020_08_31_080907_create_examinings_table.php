<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examinings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('lecture_id');
            $table->dateTime('start_time');
            $table->string('reading_question_1');
            $table->string('reading_answer_1')->nullable();
            $table->string('reading_question_2');
            $table->string('reading_answer_2')->nullable();
            $table->string('reading_question_3');
            $table->string('reading_answer_3')->nullable();
            $table->string('listening_question_1');
            $table->string('listening_answer_1')->nullable();
            $table->string('listening_question_2');
            $table->string('listening_answer_2')->nullable();
            $table->string('listening_question_3');
            $table->string('listening_answer_3')->nullable();
            $table->string('writing_question_1');
            $table->string('writing_answer_1')->nullable();
            $table->string('writing_question_2');
            $table->string('writing_answer_2')->nullable();
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
        Schema::dropIfExists('examinings');
    }
}
