<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('readings')->truncate();
        DB::table('readings')->insert([
            [
                'id' => 1,
                'content' => 'Adrienne Rich, who is an alumna of Jackson Madison High School will be appearing on the BBC\'s new talk show, The Rachel Ratigan Show, this Saturday night. The Rachel Ratigan Show is premiering this week and Rich is honored to be the first guest on the show. She will be interviewed about her second novel, A Woman Observed, which depicts a 35-year-old divorced woman living in a city as observed through the eyes of other characters. The book has hit No. 14 on the New York Times Bestseller List and has been praised by critics as the most commercially successful feminist novel this year. To watch the show, tune in to channel 4 at 9 P.M. this Saturday.',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'content' => 'Beginning this year, Renaissance Strategy Inc. will provide financial aid to fulltime employees with children in school. Financial aid is available to candidates from elementary school to college, but homeschooling is not included. There are also certain requirements that you must meet in order to be eligible for financial aid. Eligible candidates must be enrolled as full-time students and maintain passing grades. Candidates must also submit a copy of proof of enrollment along with application forms which you can find at the front of the administration division. How much aid your child receives will depend on your financial need and on the amount of other aid you receive. Aid will be paid directly to the school on a yearly basis. If you need more information or have any questions about the program, please call 123-5656.',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'content' => 'Dear Sirs,</br>Four months ago, I signed up for a premium membership at Fitness First at a monthly fee of $55. When I signed up, I was told that I was free to cancel my membership at any time, for any reason, with no extra payment. </br>Since I joined, I have been extremely disappointed in the Fitness First\'s facilities and staff. The locker rooms and swimming pools are poorly maintained and extremely dirty. The Jacuzzi has been out of order for more than a month and repairs on it have not even begun. The Pilates class schedule has been changed several times, without notice, and the instructor never seemed to be fully devoted to the class.</br>I telephoned Fitness First and was told that - contrary to what I was told verbally when signing up - I would have to pay a "processing fee" of $75 to end my membership. One week later, I received a bill in the mail saying I still owed the processing fee. I refuse to pay this fee.</br> If you continue billing me, I will be discussing the matter with my lawyer. In addition, I will be filing formal complaints with the City Business Bureau and the Health Department about the unsanitary condition of your facilities.</br>I suggest you discuss the matter with your billing department immediately.</br>Julia Londale</br>Julia Londale',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'content' => 'Following up its successful Sushi Workshop in July, the Japan-America Society of Greater Long Island presents sushi chef Maksui from Kenichi for an advanced sushi workshop on Sunday, October 25th at the Tri-fold Clubhouse (410 Guadalupe St.) from 1:30 p.m. to 3:30 p.m. This workshop will allow attendees of the previous workshop to build on their sushi-making skills. This is not a free event. The cost for current JGA members is $35. If you\'re a nonmember, the cost is $40 (Please bring exact change in cash). Although the cost includes all the ingredients necessary to make sushi, you will need to bring your own knife and a towel or cloth of some sort. Please note that registration is required in order to attend this class. Space is limited. Send a registration request to jga-events@jga.org by Thursday, October 22. 48 hours\' notice is required in order to cancel.',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'content' => '"LBA</br>Local Businesses of Albany</br>121 S. Main St., Albany, NY 12019</br></br>November 9</br>Dear Ms. LeChevre,</br>We would like to invite you to participate in our upcoming meeting, to be held on Wednesday, November 17 at 6:00 p.m. at the Hilton Suites. During this meeting we plan to hold an election for the next LBA president, who will serve for the coming year. Past presidents will be present to explain the importance of the position and to help facilitate the voting process. This year we have four members interested in running for this position; please note that their professional profiles are attached. Make sure to review these profiles prior to the meeting. There will be a question-and-answer session with this year\'s candidates before voting begins. </br>We are anticipating a large turnout at this year\'s election, and hope that you will be able to join us on this important day. If, for some reason, you are unable to attend, we ask that you send in your vote using the attached mail-in ballot. You can send the form to Local Businesses of Albany, 121 S. Main St., Albany, NY 12019. Please make sure that your ballot arrives by November 17.</br>Our bylaws state that a majority of the LBA\'s members must vote in the upcoming election in order for us to officially inaugurate a new president. Because of this, we ask that you make voting a priority and either attend the meeting or send in your ballot by mail.</br>Sincerely,</br>David Smith</br>"',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'content' => '"IntersiI Corp., manufacturer of high-performance wireless networking solutions, announced today that it will relocate its corporate headquarters from Irvine, Calif. to Milpitas, effective December 1, 2010. The company plans to accommodate the expanding operation with the relocation of the finance, human resources, IT and sales operations facilities. </br>Intersil Corp. cited Milpitas\' skilled work force, good access to an international airport, and the generous tax incentives offered by the state government and the cost-effective environment as the main reasons for choosing the city for its new head office. </br>The move is expected to generate up to 90 new high-paying jobs for local residents. With an average annual salary of $10,000, Intersil\'s annual payroll for workers in Milpitas will surpass $4 million. This is good news for the city.</br>""Our attractiveness as a place to live and work, makes this city an excellent home for Intersil where they can prosper and grow well into the future. Also, Intersil\'s impressive salaries will significantly impact the local economy,"" said Mayor Ronald Lopez. </br>Although the relocation will cost Intersil Corp. a significant amount of money, executives feel it is a worthwhile investment. ""We can continue to execute our plan towards profitability, while building our company for the future in the new site,"" CEO Adriana Cruz said in a press statement.</br>"',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'content' => '"Looking for Cozy House?</br>Looking for roommates who want to live in a cozy 3-bedroom apartment starting on March 1st. The location is great and very convenient, only a short walk to bus stops. The interior is quite charming with large windows and high ceilings. The apartment includes sizeable kitchen, living room, and two full bathrooms. Trash collection and water are included in monthly rent; all other utilities are split evenly. There is no parking included, but there is a garage across the street that offers monthly rental. For more information, call 250-356-2368.</br>"',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'content' => '"Hillside Hotel International</br>798 Blackstone St.</br>Salt Lake City, UT</br>Kimberly Law Firm Co.</br>356 Brooks Ave.</br></br>Dear Mr. Morris,</br>In our meeting last week with you, you expressed an interest in reserving our largest banquet hall for your annual meeting on September 20. At the time, I made a tentative reservation and sent a contract to you. I requested that the contract be signed and returned to my attention within ten business days. As of this morning, I have not yet received the executed contract. </br>I need to know if you still intend to make use of our facilities as soon as possible. If not, we have another company that is interested in the same banquet hall and is prepared to make a deposit. If I do not hear from you within the next 48 hours. I’m going to assume that you’re no longer interested and will cancel the reservation. If you want to keep the reservation, please contact me as soon as possible. Should you no longer have the original contract, I would be more than happy to send you another copy. I look forward to your response.</br></br>John Bates</br>Front Desk Manager"',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'content' => '"Raymond Paycheck</br>433 1st St.</br>Detroit, MI 48303</br>Dear Mr. Paycheck,</br>We appreciate your request a few days ago to increase your credit limit on your Visa Card from $7,500 to $10,000. National Bank has carefully reviewed your overall credit rating, your current bank balances, and your payment history for the debts you carry on your Visa Card, we are afraid to tell you that we are not able to accept your request at this time. However, we could review your case again after the 1st of January, taking into account your further payment history and any new credit information you may wish to provide. Please submit another written request if you wish us to do so. </br>Mr. Paycheck, you are a valued customer to us. If you have any questions or concerns, please give me a call by telephone. We are always willing to do the best we can for you.</br>Sincerely,</br>Jason Notts</br>Chief Credit Card Officer</br>National Banking Visa</br>1-899-433-4444</br>Dear Mr. Notts,</br>Thank you for your kindness for at least considering to raise my credit card limit, although unfortunately you were not able to accept my request. Yes, I do admit that my credit card payments have not been consistent and are sometimes late. But I really need the expansion of my credit card limit, therefore I do wish that you will consider my case again on the 1st of January. And I hope that by then my credit rating will be better so that you will accept my request.</br>Sincerely, </br>Bill"',
                'status' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],


        ]);
//        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
