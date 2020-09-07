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
            [
                'id' => 1,
                'student_id' => 501,
                'lecture_id' => 2,
                'listen_point' => 7.0,
                'read_point' => 7.0,
                'speak_point' => 7.0,
                'write_point' => 7.0,
                'speak_comment' => null,
                'write_comment' => null,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'student_id' => 501,
                'lecture_id' => 2,
                'listen_point' => 7.0,
                'read_point' => 7.0,
                'speak_point' => 7.0,
                'write_point' => 7.0,
                'speak_comment' => null,
                'write_comment' => null,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'student_id' => 501,
                'lecture_id' => 2,
                'listen_point' => 7.0,
                'read_point' => 7.0,
                'speak_point' => 7.0,
                'write_point' => 7.0,
                'speak_comment' => null,
                'write_comment' => null,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'student_id' => 501,
                'lecture_id' => 2,
                'listen_point' => 7.0,
                'read_point' => 7.0,
                'speak_point' => 7.0,
                'write_point' => 7.0,
                'speak_comment' => null,
                'write_comment' => null,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'student_id' => 501,
                'lecture_id' => 2,
                'listen_point' => 7.0,
                'read_point' => 7.0,
                'speak_point' => 7.0,
                'write_point' => 7.0,
                'speak_comment' => null,
                'write_comment' => null,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'student_id' => 501,
                'lecture_id' => 2,
                'listen_point' => 7.0,
                'read_point' => 7.0,
                'speak_point' => 7.0,
                'write_point' => 7.0,
                'speak_comment' => null,
                'write_comment' => null,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'student_id' => 501,
                'lecture_id' => 2,
                'listen_point' => 7.0,
                'read_point' => 7.0,
                'speak_point' => 7.0,
                'write_point' => 7.0,
                'speak_comment' => null,
                'write_comment' => null,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'student_id' => 501,
                'lecture_id' => 2,
                'listen_point' => 7.0,
                'read_point' => 7.0,
                'speak_point' => 7.0,
                'write_point' => 7.0,
                'speak_comment' => null,
                'write_comment' => null,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'student_id' => 501,
                'lecture_id' => 2,
                'listen_point' => 7.0,
                'read_point' => 7.0,
                'speak_point' => 7.0,
                'write_point' => 7.0,
                'speak_comment' => null,
                'write_comment' => null,
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
