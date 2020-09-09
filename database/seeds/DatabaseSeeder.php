<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ListeningQuestionSeeder::class);
        $this->call(ListeningSeeder::class);
//        $this->call(NotificationSeeder::class);
        $this->call(ReadingQuestionSeeder::class);
        $this->call(ReadingSeeder::class);
//        $this->call(ResultSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(SpeakingSeeder::class);
        $this->call(WritingAnswerSeeder::class);
        $this->call(WritingResultSeeder::class);
        $this->call(WritingSeeder::class);
        $this->call(ExamSeeder::class);
    }
}
