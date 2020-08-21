<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('listenings')->truncate();
        DB::table('listenings')->insert([
            [
                'id' => 1,
                'audio' => 'https://www.englishclub.com/audio/toeic/toeic-listening-1-1.mp3',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'audio' => 'https://www.englishclub.com/audio/toeic/toeic-listening-1-2.mp3',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'audio' => 'https://www.englishclub.com/audio/toeic/toeic-listening-1-3.mp3',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'audio' => 'https://www.englishclub.com/audio/toeic/toeic-listening-2-1.mp3',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'audio' => 'https://www.englishclub.com/audio/toeic/toeic-listening-2-2.mp3',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'audio' => 'https://www.englishclub.com/audio/toeic/toeic-listening-2-3.mp3',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'audio' => 'https://www.englishclub.com/audio/toeic/toeic-listening-2-4.mp3',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'audio' => 'https://www.englishclub.com/audio/toeic/englishclub-toeic-short-convos-1.mp3',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'audio' => 'https://www.englishclub.com/audio/toeic/englishclub-toeic-short-convos-2.mp3',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'audio' => 'https://www.englishclub.com/audio/toeic/englishclub-toeic-short-talks-1.mp3',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'audio' => 'https://www.englishclub.com/audio/toeic/englishclub-toeic-short-talks-2.mp3',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'audio' => 'https://www.englishclub.com/audio/toeic/englishclub-toeic-short-talks-3.mp3',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],


        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');//
    }
}
