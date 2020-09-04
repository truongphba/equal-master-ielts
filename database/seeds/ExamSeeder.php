<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('exams')->truncate();
        DB::table('exams')->insert([
            [
                'id' => 1,
                'student_id' => 501,
                'lecture_id' => 2,
                'money' => 50,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'student_id' => 501,
                'lecture_id' => 2,
                'money' => 50,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'student_id' => 501,
                'lecture_id' => 2,
                'money' => 50,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'student_id' => 501,
                'lecture_id' => 2,
                'money' => 50,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'student_id' => 501,
                'lecture_id' => 2,
                'money' => 50,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'student_id' => 501,
                'lecture_id' => 2,
                'money' => 50,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'student_id' => 501,
                'lecture_id' => 2,
                'money' => 50,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
