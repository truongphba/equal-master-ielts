<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WritingResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('writingResults')->truncate();
        DB::table('writingResults')->insert([

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
