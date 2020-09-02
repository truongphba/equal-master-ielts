<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReadingQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('reading_questions')->truncate();
        DB::table('reading_questions')->insert([
            [
                'id' => 1,
                'reading_id' => 1,
                'title' => 'What is the purpose of the announcement?',
                'answer' => 'To criticize a feminist novel, To describe a guest of a television show, To introduce a newly launched television program, To raise sales of a novel',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'reading_id' => 1,
                'title' => 'What can be inferred about Adrienne Rich?',
                'answer' => 'She has written a Geography., She hasn\'t yet graduated from high school., Her writing is fictional., Her book has been strictly criticized.',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'reading_id' => 2,
                'title' => 'What is the announcement intended for?',
                'answer' => 'Giving information on government financial aid, Motivating employees to pursue an academic career, Strengthening the scholarship eligibility requirements, Supporting the children of employees',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'reading_id' => 2,
                'title' => 'What is NOT indicated about applying for financial aid?',
                'answer' => 'The sum of financial support received is determined by a recipient\'s performance., Candidates must be full-time students., A certificate to show status of enrollment is essential., Candidates who are homeschooled are not eligible.',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'reading_id' => 3,
                'title' => 'What is the main point of this letter?',
                'answer' => 'To discuss a membership upgrade, To suggest improvement of the facilities, To inform a health club of disapproval about a cancellation fee, To ask the gym to accept a refund request',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'reading_id' => 3,
                'title' => 'Why is Ms. Londale unhappy with her club membership?',
                'answer' => 'The gym didn\'t provide enough information initially., The club facilities are poorly managed and maintained., The fee has been increased unexpectedly., The receptionist was very rude to her.',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'reading_id' => 3,
                'title' => 'How does Ms. Londale feel about being charged the processing fee?',
                'answer' => 'She understands that it is part of the contract., She is happy that the fee wasn\'t as high as she expected., She is angry that she was told differently when she joined., She felt that it was not an important matter.',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'reading_id' => 3,
                'title' => 'What is Ms. Londale least likely to do if she gets a request for the processing fee again?',
                'answer' => 'Consult a lawyer, Make a formal complaint, Report it to the Health Department, Pay the processing fee',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'reading_id' => 4,
                'title' => 'What is the main purpose of the notice?',
                'answer' => 'To inform readers of a useful website, To describe the Japan-America Society of Greater Long Island, To instruct people how to write poetry, To announce an upcoming workshop',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'reading_id' => 4,
                'title' => 'What information is NOT given in the notice?',
                'answer' => 'The workshop instructor\'s name, Late registration instructions, Cancellation instructions, Things to bring to the workshop',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'reading_id' => 4,
                'title' => 'According to the notice, who is the workshop tailored to?',
                'answer' => 'Intermediate sushi chefs, Beginner sushi chefs, New JGA members, All JGA members',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'reading_id' => 5,
                'title' => 'Why is the LBA holding a meeting?',
                'answer' => 'To review its bylaws, To revise its voting procedures, To inspire new members to join, To choose a new president',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'reading_id' => 5,
                'title' => 'If Ms. LeChevre cannot attend the meeting, what should she do?',
                'answer' => 'Complete a mail-in ballot, Send an apology letter to the president, Make a financial contribution to the LBA, Run for president',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'reading_id' => 5,
                'title' => 'What is attached to the letter?',
                'answer' => 'LBA\'s budget status, A annual calendar of events, Profiles of those running for president, A directory of small businesses',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 15,
                'reading_id' => 5,
                'title' => 'What can be inferred about Ms. LeChevre?',
                'answer' => 'She wants to be president., She works for the president., She takes charge of counting the ballots., She is a member of the LBA.',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 16,
                'reading_id' => 6,
                'title' => 'What is the article mainly about?',
                'answer' => 'The state of a city\'s local economy, The rise of the employment rate, The relocation of a company, The improvement of an existing tax law',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 17,
                'reading_id' => 6,
                'title' => 'What is indicated about lntersil Corp?',
                'answer' => 'The existing headquarters is in Milpitas., Its business is expanding., It has a cost-effective environment., It has highly skilled workers.',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 18,
                'reading_id' => 6,
                'title' => 'The word "surpass" in paragraph 3, line 3, is closest in meaning to',
                'answer' => 'exceed, include, develop, accelerate ',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 19,
                'reading_id' => 6,
                'title' => 'How does the CEO feel about the company\'s plan?',
                'answer' => 'anxious , angry , depressed , confident',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 20,
                'reading_id' => 7,
                'title' => 'What is the purpose of the notice?',
                'answer' => 'Inform residents of an increase in utility fees,Advertise a room for rent,Update new regulations for tenants,Recruit a manager for an apartment building',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 21,
                'reading_id' => 7,
                'title' => 'What is included in the notice?',
                'answer' => 'All utilities are included in the rent,The kitchen is not spacious,It is close to public transportation,Onsite parking is available',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 22,
                'reading_id' => 8,
                'title' => ' Why is this email written?',
                'answer' => 'To invite an employee to attend wedding.To apologize for a clerical mistake.To request a response from a customer,To complain about poor Services',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 23,
                'reading_id' => 8,
                'title' => ' What does the email suggest about Mr. Bates?',
                'answer' => 'He has cancelled a reservation., He works for an law firm.,He has spoken to Mr. Morris previously.,He forgot to send the contract.',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 24,
                'reading_id' => 8,
                'title' => 'The word “intend” in paragraph 2, line 1 is closest in meaning to:',
                'answer' => 'complete,Plan,Reserve ,Announce ',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 25,
                'reading_id' => 8,
                'title' => 'What is Mr. Morris asked to do?',
                'answer' => 'Contact Mr. Bates,Refund the deposit money,Make a new reservation,Choose a different date',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 26,
                'reading_id' => 9,
                'title' => 'From which of the bank departments was this letter sent?',
                'answer' => 'Analysis or Statistical, Country Bank Account , Paying Teller\'s, Credit.',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 27,
                'reading_id' => 9,
                'title' => 'What is the purpose of the letter',
                'answer' => 'His credit card no longer exists., His application for a new credit card has been approved., His credit card balance is too high and it needs to be cleared., His wish to raise his credit line has been declined.',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 28,
                'reading_id' => 9,
                'title' => 'What should Mr. Paycheck do in order to get answers for any questions he has?',
                'answer' => 'Send an email to Mr. Notts., Call his personal credit card officer., Leave a message on the Bank\'s website., Fax to the Customer Service employee.',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 29,
                'reading_id' => 9,
                'title' => 'What is the main reason the bank declined Mr. Paycheck\'s request?',
                'answer' => 'He carries a large balance in his checking account., He has taken too many loans from the bank., He has not been a customer of the bank long enough., He has been late many times in paying his credit payment.',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 30,
                'reading_id' => 9,
                'title' => 'What will Mr. Paycheck probably do next?',
                'answer' => 'He will try to make a new account in a different bank., He will try to get rid of all the balances on his credit card., He will pay for all of his loan interests consistently and not late., He will pay for his credit card debts regularly.',
                'correct_answer' => '',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
