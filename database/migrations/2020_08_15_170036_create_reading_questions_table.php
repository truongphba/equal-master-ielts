<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reading_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reading_id');
            $table->foreign('reading_id')->references('id')->on('readings');
            $table->text('answer');
            $table->string('correct_answer');
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
        Schema::dropIfExists('reading_questions');
    }
}
