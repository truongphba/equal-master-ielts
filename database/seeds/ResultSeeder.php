<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('results')->truncate();
        DB::table('results')->insert([

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
