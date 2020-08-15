<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritingAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writing_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('writing_id');
            $table->foreign('writing_id')->references('id')->on('writings');
            $table->unsignedBigInteger('examiner_id');
            $table->text('answer');
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
        Schema::dropIfExists('writing_answers');
    }
}
