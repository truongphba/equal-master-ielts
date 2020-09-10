<?php

namespace App\Http\Controllers\Frontend;

use App\Exam;
use App\Examining;
use App\Http\Controllers\Controller;
use App\Listening;
use App\ListeningQuestion;
use App\Reading;
use App\ReadingQuestion;
use App\Result;
use App\User;
use App\Writing;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function storeExam(Request $request)
    {
        $student_id = $request->get('student_id');
        $balance = User::where('id', $student_id)->first()->balance;
        if ($balance < 22){
             return response()->json(['msg' => 'Your balance is less then 22$'],400);
        }
        $lecture_id = $request->get('lecture_id');
        $randomReading = Reading::inRandomOrder()->limit(3)->get();
        $randomListening = Listening::inRandomOrder()->limit(3)->get();
        $randomWriting = Writing::inRandomOrder()->limit(2)->get();
        $exam = new Examining();
        $exam->student_id = $student_id;
        $exam->lecture_id = $lecture_id;
        $exam->start_time = Carbon::now()->format('Y-m-d H:i:s');
        $exam->reading_question_1 = $randomReading[0]->id;
        $exam->reading_question_2 = $randomReading[1]->id;
        $exam->reading_question_3 = $randomReading[2]->id;
        $exam->listening_question_1 = $randomListening[0]->id;
        $exam->listening_question_2 = $randomListening[1]->id;
        $exam->listening_question_3 = $randomListening[2]->id;
        $exam->writing_question_1 = $randomWriting[0]->id;
        $exam->writing_question_2 = $randomWriting[1]->id;
        $exam->save();
        return response()->json(null,200);

    }

    public function updateTime(Request $request)
    {
        $exam = Examining::where('student_id', Auth::id())->first();
        if ($exam->status == 1) {
            $exam->start_time = Carbon::now()->format('Y-m-d H:i:s');
            $exam->status = 2;
        } else if ($exam->status == 2) {
            $exam->start_time = Carbon::now()->format('Y-m-d H:i:s');
            $exam->status = 3;
        } else if ($exam->status == 3) {
            $exam->start_time = Carbon::now()->format('Y-m-d H:i:s');
            $exam->status = 4;
        }
        $exam->save();
        return response()->json(null, 200);
    }

    public function updateExam(Request $request)
    {
        $exam = Examining::where('student_id', Auth::id())->first();
        if ($exam->status == 2) {
            $exam->reading_answer_1 = $request->get('reading_answer_1');
            $exam->reading_answer_2 = $request->get('reading_answer_2');
            $exam->reading_answer_3 = $request->get('reading_answer_3');
        }
        if ($exam->status == 3) {
            $exam->listening_answer_1 = $request->get('listening_answer_1');
            $exam->listening_answer_2 = $request->get('listening_answer_2');
            $exam->listening_answer_3 = $request->get('listening_answer_3');
        }
        if ($exam->status == 1) {
            $exam->writing_answer_1 = $request->get('writing_answer_1');
            $exam->writing_answer_2 = $request->get('writing_answer_2');
        }
        $exam->save();
        return response()->json(null, 200);
    }

    public function storeMark(Request $request)
    {
        $countReading = 0;
        $countTrueReading = 0;
        $countListening = 0;
        $countTrueListening = 0;
        $writing_point = $request->get('writing_point');
        $writing_comment = $request->get('writing_comment');
        $speaking_point = $request->get('speaking_point');
        $speaking_comment = $request->get('speaking_comment');
        $member_id = $request->get('member_id');

        $examining = Examining::where('student_id', $member_id)->first();
        $user_reading_answer_1 = explode(';', $examining->reading_answer_1);
        $reading_questions_1 = ReadingQuestion::where('reading_id', $examining->reading_question_1)->get();
        $user_reading_answer_2 = explode(';', $examining->reading_answer_2);
        $reading_questions_2 = ReadingQuestion::where('reading_id', $examining->reading_question_2)->get();
        $user_reading_answer_3 = explode(';', $examining->reading_answer_3);
        $reading_questions_3 = ReadingQuestion::where('reading_id', $examining->reading_question_3)->get();
        $user_listening_answer_1 = explode(';', $examining->listening_answer_1);
        $listening_questions_1 = ListeningQuestion::where('listening_id', $examining->listening_question_1)->get();
        $user_listening_answer_2 = explode(';', $examining->listening_answer_2);
        $listening_questions_2 = ListeningQuestion::where('listening_id', $examining->listening_question_2)->get();
        $user_listening_answer_3 = explode(';', $examining->listening_answer_3);

        $listening_questions_3 = ListeningQuestion::where('listening_id', $examining->listening_question_3)->get();

        if (count($user_reading_answer_1) >= 3)
        foreach ($reading_questions_1 as $key => $item) {
            $countReading++;
            if (trim($reading_questions_1[$key]->correct_answer) == trim($user_reading_answer_1[$key])) {
                $countTrueReading++;
            }
        }else{
            $countReading++;
            $countTrueReading = 0;
        }

        if (count($user_reading_answer_2) >= 3)
        foreach ($reading_questions_2 as $key => $item) {
            $countReading++;
            if (trim($reading_questions_2[$key]->correct_answer) == trim($user_reading_answer_2[$key])) {
                $countTrueReading++;
            }
        }else{
            $countReading++;
            $countTrueReading = 0;
        }

        if (count($user_reading_answer_3) >= 3)
        foreach ($reading_questions_3 as $key => $item) {
            $countReading++;
            if (trim($reading_questions_3[$key]->correct_answer) == trim($user_reading_answer_3[$key])) {
                $countTrueReading++;
            }
        }else{
            $countReading++;
            $countTrueReading = 0;
        }

        if (count($user_listening_answer_1) >= 3)
        foreach ($listening_questions_1 as $key => $item) {
            $countListening++;
            if (trim($listening_questions_1[$key]->correct_answer) == trim($user_listening_answer_1[$key])) {
                $countTrueListening++;
            }
        }else{
            $countListening++;
            $countTrueListening = 0;
        }

        if (count($user_listening_answer_2) >= 3)
        foreach ($listening_questions_2 as $key => $item) {
            $countListening++;
            if (trim($listening_questions_2[$key]->correct_answer) == trim($user_listening_answer_2[$key])) {
                $countTrueListening++;
            }
        }else{
            $countListening++;
            $countTrueListening = 0;
        }

        if (count($user_listening_answer_3) >= 3)
        foreach ($listening_questions_3 as $key => $item) {
            $countListening++;
            if (trim($listening_questions_3[$key]->correct_answer) == trim($user_listening_answer_3[$key])) {
                $countTrueListening++;
            }
        }else{
            $countListening++;
            $countTrueListening = 0;
        }

        $readingPoint = ($countTrueReading / $countReading) * 10;
        $listeningPoint = ($countTrueListening / $countListening) * 10;
        DB::beginTransaction();
        try {

            $result = new Result();
            $result->student_id = $member_id;
            $result->lecture_id = $examining->lecture_id;
            $result->listen_point = intval(round($listeningPoint));
            $result->read_point = intval(round($readingPoint));
            $result->write_point = $writing_point;
            $result->speak_point = $speaking_point;
            $result->speak_comment = $speaking_comment;
            $result->write_comment = $writing_comment;
            $result->save();

            $memberBalance = User::where('id', $member_id)->where('status', 1)->first()->balance;
            $lectureBalance = User::where('id', $examining->lecture_id)->where('status', 1)->first()->balance;
            User::where('id', $member_id)->update(['balance' => ($memberBalance - 22)]);
            User::where('id', $examining->lecture_id)->update(['balance' => ($lectureBalance + 20)]);

            $exam = new Exam();
            $exam->student_id = $member_id;
            $exam->lecture_id = $examining->lecture_id;
            $exam->money = 2;
            $exam->save();

            DB::commit();
            return response()->json(null, 200);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json($exception, 400);
        }

    }

    public function checkCurrentExam()
    {
        $exam = Examining::where('student_id', Auth::id())->first();
        return response()->json([
            'exam' => $exam
        ], 200);
    }

    public function getResult()
    {
        $result = Result::where('student_id', Auth::id())->orderBy('created_at', 'desc')->first();

        return response()->json([
            'result' => $result
        ], 200);
    }

    public function submitVote(Request $request)
    {
        $lecture_id = $request->get('lecture_id');
        $rate = $request->get('rating');
        $member_id = $request->get('member_id');
        $lectureRate = User::where('id', $lecture_id)->where('status', 1)->first()->votes;
        $rated = intval(round(($rate + $lectureRate) / 2));
        DB::beginTransaction();
        try {
            User::where('id', $lecture_id)->update(['votes' => $rated]);
            Examining::where('student_id', $member_id)->delete();
            DB::commit();
            return response()->json(null, 200);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(null, 400);
        }

    }
}
