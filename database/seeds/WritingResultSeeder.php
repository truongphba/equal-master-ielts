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
        DB::table('writing_results')->truncate();
        DB::table('writing_results')->insert([
            [
                [
                    'id' => 1,
                    'writing_answer_id'=>1,
                    'student_id' => 2,
                    'lecture_id' => 17,
                    'point' => 7.0,
                    'comment' => null,
                    'status' => 1,
                    'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                ],
                [
                    'id' => 2,
                    'writing_answer_id'=>2,
                    'student_id' => 5,
                    'lecture_id' => 48,
                    'point' => 7.0,
                    'comment' => null,
                    'status' => 1,
                    'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                ],
                [
                    'id' => 3,
                    'writing_answer_id'=>3,
                    'student_id' => 6,
                    'lecture_id' => 46,
                    'point' => 7.0,
                    'comment' => null,
                    'status' => 1,
                    'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                ],
                [
                    'id' => 4,
                    'writing_answer_id'=>4,
                    'student_id' => 10,
                    'lecture_id' => 31,
                    'point' => 7.0,
                    'comment' => null,
                    'status' => 1,
                    'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                ],
                [
                    'id' => 5,
                    'writing_answer_id'=>5,
                    'student_id' => 14,
                    'lecture_id' => 30,
                    'point' => 7.0,
                    'comment' => null,
                    'status' => 1,
                    'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                ],
                [
                    'id' => 6,
                    'writing_answer_id'=>6,
                    'student_id' => 15,
                    'lecture_id' => 16,
                    'point' => 7.0,
                    'comment' => null,
                    'status' => 1,
                    'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                ],
                [
                    'id' => 7,
                    'writing_answer_id'=>7,
                    'student_id' => 18,
                    'lecture_id' => 50,
                    'point' => 7.0,
                    'comment' => null,
                    'status' => 1,
                    'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                ],
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
