<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WritingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('writings')->truncate();
        DB::table('writings')->insert([
            [
                'id' => 1,
                'content' => ' People think that countries should produce the food their population eats and import less food as much as possible. To what extent do you agree or disagree?',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'content' => 'Countries should try to produce all the food that their population eats and import as little as possible </br> To what extent do you agree or disagree?"',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'content' => 'Some people believe that young people know about international pop and movie stars but know very less about famous people from the history in their own country. Why is this? How can more interest be created in young people to gain more knowledge about their own famous people from history?',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'content' => 'Many young people like international pop and movie stars more than famous people in history of their country.</br> Why? And give the solutions to increase young people’s interest in famous pp in famous pp in history of their country.',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'content' => 'International travel is becoming cheaper, and countries are opening their doors to more and more tourists. Do the advantages of increased tourism outweigh its disadvantages? ',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'content' => 'Advantage outweigh disadvantage: as international travel became cheaper, more nations are opening their doors to an increased number of visitors."',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'content' => 'In many countries imprisonment is the most common solution to crimes. However, some people believe that better education will be a more effective solution . To what extent do you agree or disagree ? ',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'content' => 'In some countries, prison is the most common solution to problem about crime. A more effective solution: provide people with better education so that they don’t become criminala. To what extent do you agree/disagree?',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'content' => 'People often think about creating an ideal society, but most of the times fail in making this happen. What is your opinion about an ideal society? How can we create an ideal society?',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'content' => 'Although more and more people read the news on the internet, newspaper will remain the main source of news for the majority of people. Do you agree or disagree with the statement?',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'content' => 'Many people are now spending more and more time travelling to work or school, some people believe that this has negative development while others think there are some benefits. Discuss both view and give your opinion"',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'content' => 'Nowadays animal experiments are widely used to develop new medicines and to test the safety of other products. Some people argue that these experiments should be banned because it is morally wrong to cause animals to suffer, while others are in favour of them because of their benefits to humanity.</br> both views and give your own opinion ',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'content' => 'Shops in the countryside are fewer and fewer, so people tend to go to stores in the towns and cities, and then lead to their inconvenient life. Car use also causes pollution. Is this phenomenon more harmful than the end?',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'content' => 'Some people think that cultural traditions may be destroyed when they are used as money-making attractions aimed at tourists. Others believe it is the only way to save these traditions. Discuss on both sides and give your opinion."',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 15,
                'content' => 'The availability of entertainment such as video games on handheld devices are harmful to individual and to the society they live in. To what extent do you agree and disagree?"',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 16,
                'content' => 'The increase in the production of consumer goods results in damage to the natural environment. What are the causes of this? What can be done to solve this problem?"',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 17,
                'content' => 'When a new town is planned, it is more important to develop public parks and sports facilities than shopping centers for people to spend their free time in. To what extent do agree or disagree? (hit)',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 18,
                'content' => 'Environmental protection is the responsibility of politicians, not individuals as individuals can do too little. To what extent do you agree or disagree? ',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 19,
                'content' => 'Some people argue that we should do research into their family history. Others, agree with the view that we should focus on the present and future generations. Discuss both views and give your own opinion."',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 20,
                'content' => 'In many parts of the world, people search for family history. Some people think that finding for the previous generations is a thing to do, but others think that it is better to be focus on present and future generations. Discuss both views and show your opinion',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
