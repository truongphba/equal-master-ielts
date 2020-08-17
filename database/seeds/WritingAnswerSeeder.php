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
        DB::table('writing_answers')->truncate();
        DB::table('writing_answers')->insert([

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
