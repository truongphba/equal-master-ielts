<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListeningQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('listeningQuestions')->truncate();
        DB::table('listeningQuestions')->insert([

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
