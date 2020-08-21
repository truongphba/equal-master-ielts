<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WritingAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('writing_answers')->truncate();
        DB::table('writing_answers')->insert([
            [
                [
                    'id' => 1,
                    'writing_id'=>1,
                    'student_id' => 2,
                    'answer' => 'Some hobbies are relatively easy, while others present more of a challenge.Personally, I believe that both types of hobby can be fun, and I therefore disagree
with the statement that hobbies need to be difficult in order to be enjoyable.
On the one hand, many people enjoy easy hobbies. One example of an activity that
is easy for most people is swimming. This hobby requires very little equipment, it
is simple to learn, and it is inexpensive. I remember learning to swim at my local
swimming pool when I was a child, and it never felt like a demanding or
challenging experience. Another hobby that I find easy and fun is photography. In
my opinion, anyone can take interesting pictures without knowing too much about
the technicalities of operating a camera. Despite being straightforward, taking
photos is a satisfying activity.On the other hand, difficult hobbies can sometimes be more exciting. If an activity
is more challenging, we might feel a greater sense of satisfaction when we manage
to do it successfully. For example, film editing is a hobby that requires a high level
of knowledge and expertise. In my case, it took me around two years before I
became competent at this activity, but now I enjoy it much more than I did when I
started. I believe that many hobbies give us more pleasure when we reach a higher
level of performance because the results are better and the feeling of achievement
is greater.In conclusion, simple hobbies can be fun and relaxing, but difficult hobbies can be
equally pleasurable for different reasons.',
                    'status' => 1,
                    'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                ],
                [
                    'id' => 2,
                    'writing_id'=>2,
                    'student_id' => 5,
                    'answer' => 'In my opinion, men and women should have the same educational opportunities.
However, I do not agree with the idea of accepting equal proportions of each
gender in every university subject. Having the same number of men and women on all degree courses is simply
unrealistic. Student numbers on any course depend on the applications that the
institution receives. If a university decided to fill courses with equal numbers of
males and females, it would need enough applicants of each gender. In reality,
many courses are more popular with one gender than the other, and it would not be
practical to aim for equal proportions. For example, nursing courses tend to attract
more female applicants, and it would be difficult to fill these courses if fifty per
cent of the places needed to go to males. Apart from the practical concerns expressed above, I also believe that it would be
unfair to base admission to university courses on gender. Universities should
continue to select the best candidates for each course according to their
qualifications. In this way, both men and women have the same opportunities, and
applicants know that they will be successful if they work hard to achieve good
grades at school. If a female student is the best candidate for a place on a course, it
would be wrong to reject her in favour of a male student with lower grades or
fewer qualifications. In conclusion, the selection of university students should be based on merit, and it
would be both impractical and unfair to change to a selection procedure based on
gender.',
                    'status' => 1,
                    'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                ],
                [
                    'id' => 3,
                    'writing_id'=>3,
                    'student_id' => 6,
                    'answer' => 'It is sometimes argued that tourists from overseas should be charged more than
local residents to visit important sites and monuments. I completely disagree with
this idea. The argument in favour of higher prices for foreign tourists would be that cultural
or historical attractions often depend on state subsidies to keep them going, which
means that the resident population already pays money to these sites through the
tax system. However, I believe this to be a very shortsighted view. Foreign tourists
contribute to the economy of the host country with the money they spend on a wide
range of goods and services, including food, souvenirs, accommodation and travel.
The governments and inhabitants of every country should be happy to subsidise
important tourist sites and encourage people from the rest of the world to visit
them. If travellers realised that they would have to pay more to visit historical and
cultural attractions in a particular nation, they would perhaps decide not to go to
that country on holiday. To take the UK as an example, the tourism industry and
many related jobs rely on visitors coming to the country to see places like Windsor
Castle or Saint Paul’s Cathedral. These two sites charge the same price regardless
of nationality, and this helps to promote the nation’s cultural heritage. If overseas
tourists stopped coming due to higher prices, there would be a risk of insufficient
funding for the maintenance of these important buildings. In conclusion, I believe that every effort should be made to attract touristsfrom
overseas, and it would be counterproductive to make them pay more than local
residents.',
                    'status' => 1,
                    'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                ],
                [
                    'id' => 4,
                    'writing_id'=>4,
                    'student_id' => 10,
                    'answer' => 'Some people believe that we should not help people in other countries as long as
there are problems in our own society. I disagree with this view because Ibelieve
that we should try to help as many people as possible. On the one hand, I accept that it is important to help our neighbours and fellow
citizens. In most communities there are people who are impoverished or
disadvantaged in some way. It is possible to find homeless people, for example, in
even the wealthiest of cities, and for those who are concerned about this problem,
there are usually opportunities to volunteer time or give money to support these
people. In the UK, people can help in a variety of ways, from donating clothing to
serving free food in a soup kitchen. As the problems are on our doorstep, and there
are obvious ways to help, I can understand why some people feel that we should
prioritise local charity. At the same time, I believe that we have an obligation to help those who live
beyond our national borders. In some countries the problems that people face are
much more serious than those in our own communities, and it is often even easier
to help. For example, when children are dying from curable diseases in African
countries, governments and individuals in richer countries can save lives simply by
paying for vaccines that already exist. A small donation to an international charity
might have a much greater impact than helping in our local area. In conclusion, it is true that we cannot help everyone, but in my opinion national
boundaries should not stop us from helping those who are in need.',
                    'status' => 1,
                    'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                ],
                [
                    'id' => 5,
                    'writing_id'=>5,
                    'student_id' => 14,
                    'answer' => 'It is true that some people know from an early age what career they want to pursue,
and they are happy to spend the rest of their lives in the same profession. While I
accept that this may suit many people, I believe that others enjoy changing careers
or seeking job satisfaction in different ways. On the one hand, having a defined career path can certainly lead to a satisfying
working life. Many people decide as young children what they want to do as
adults, and it gives them a great sense of satisfaction to work towards their goals
and gradually achieve them. For example, many children dream of becoming
doctors, but to realise this ambition they need to gain the relevant qualifications
and undertake years of training. In my experience, very few people who have
qualified as doctors choose to change career because they find their work so
rewarding, and because they have invested so much time and effort to reach
their goal. On the other hand, people find happiness in their working lives in different ways.
Firstly, not everyone dreams of doing a particular job, and it can be equally
rewarding to try a variety of professions; starting out on a completely new career
path can be a reinvigorating experience. Secondly, some people see their jobs as
simply a means of earning money, and they are happy if their salary is high enough
to allow them to enjoy life outside work. Finally, job satisfaction is often the result
of working conditions, rather than the career itself. For example, a positive
working atmosphere, enthusiastic colleagues, and an inspirational boss can make
working life much more satisfying, regardless of the profession. In conclusion, it can certainly be satisfying to pursue a particular career for the
whole of one’s life, but this is by no means the only route to fulfilment.',
                    'status' => 1,
                    'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                ],
                [
                    'id' => 6,
                    'writing_id'=>6,
                    'student_id' => 15,
                    'answer' => 'Many young people work on a volunteer basis, and this can only be beneficial for
both the individual and society as a whole. However, I do not agree that we should
therefore force all teenagers to do unpaid work. Most young people are already under enough pressure with their studies, without
being given the added responsibility of working in their spare time. School is just
as demanding as a full-time job, and teachers expect their students to do homework
and exam revision on top of attending lessons every day. When young people do
have some free time, we should encourage them to enjoy it with their friends or to
spend it doing sports and other leisure activities. They have many years of work
ahead of them when they finish their studies. At the same time, I do not believe that society has anything to gain from obliging
young people to do unpaid work. In fact, I would argue that it goes against the
values of a free and fair society to force a group of people to do something against
their will. Doing this can only lead to resentment amongst young people, who
would feel that they were being used, and parents, who would not want to be told
how to raise their children. Currently, nobody is forced to volunteer, and this is
surely the best system. In conclusion, teenagers may choose to work for free and help others, but in my
opinion we should not make this compulsory.',
                    'status' => 1,
                    'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                ],
                [
                    'id' => 7,
                    'writing_id'=>7,
                    'student_id' => 18,
                    'answer' => 'It is true that medicines and other products are routinely tested on animals before
they are cleared for human use. While I tend towards the viewpoint that animal
testing is morally wrong, I would have to support a limited amount of animal
experimentation for the development of medicines. On the one hand, there are clear ethical arguments against animal experimentation.
To use a common example of this practice, laboratory mice may be given an illness
so that the effectiveness of a new drug can be measured. Opponents of such
research argue that humans have no right to subject animals to this kind of trauma,
and that the lives of all creatures should be respected. They believe that the
benefits to humans do not justify the suffering caused, and that scientists should
use alternative methods of research. On the other hand, reliable alternatives to animal experimentation may not always
be available. Supporters of the use of animals in medical research believe that a
certain amount of suffering on the part of mice or rats can be justified if human
lives are saved. They argue that opponents of such research might feel differently
if a member of their own families needed a medical treatment that had been
developed through the use of animal experimentation. Personally, I agree with the
banning of animal testing for non-medical products, but I feel that it may be a
necessary evil where new drugs and medical procedures are concerned. In conclusion, it seems to me that it would be wrong to ban testing on animals for
vital medical research until equally effective alternatives have been developed.',
                    'status' => 1,
                    'created_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                    'updated_at' => \Illuminate\Support\Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
                ],
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
