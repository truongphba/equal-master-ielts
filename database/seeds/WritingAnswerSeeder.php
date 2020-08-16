<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WritingAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('writingAnswers')->truncate();
        DB::table('writingAnswers')->insert([

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
