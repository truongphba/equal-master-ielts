<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('notifications')->truncate();
        DB::table('notifications')->insert([

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');//
    }
}
