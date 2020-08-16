<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReadingQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('readingQuestions')->truncate();
        DB::table('readingQuestions')->insert([

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
