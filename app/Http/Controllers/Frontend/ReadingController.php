<?php

namespace App\Http\Controllers\Frontend;

use App\Examining;
use App\Http\Controllers\Controller;
use App\Listening;
use App\ListeningQuestion;
use App\Reading;
use App\ReadingQuestion;
use App\Result;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReadingController extends Controller
{
    public function reading(Request $request)
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        $isExamining = Examining::where('student_id', Auth::user()->id)->first();
        if (!isset($isExamining)){
            return response()->json(['status' => 0], 400);
        }
        $readingExam =  Examining::where('student_id', Auth::user()->id)->where('status', 2)->first();
        if (!isset($readingExam)) {
            return response()->json(['status' => $isExamining->status], 400);
        }
        $preTime = date('Y-m-d H:i:s', strtotime('+10 seconds', strtotime($readingExam->start_time)));
        $endTime = date('Y-m-d H:i:s', strtotime('+20 minutes 10 seconds', strtotime($readingExam->start_time)));
        if (strtotime($now) >= strtotime($endTime)) {
            Examining::where('student_id', Auth::id())->update(['status' => 3]);
            return response()->json(['status' => Examining::where('student_id', Auth::user()->id)->first()->status], 400);
        }
        $lecture_id = $isExamining->lecture_id;
        $reading_question_1 = Reading::where('id', $readingExam->reading_question_1)->first();
        $reading_answer_1 = ReadingQuestion::where('reading_id', $reading_question_1->id)->get();
        $reading_question_2 = Reading::where('id', $readingExam->reading_question_2)->first();
        $reading_answer_2 = ReadingQuestion::where('reading_id', $reading_question_2->id)->get();
        $reading_question_3 = Reading::where('id', $readingExam->reading_question_3)->first();
        $reading_answer_3 = ReadingQuestion::where('reading_id', $reading_question_3->id)->get();
        return response()->json([
            'lecture_id' => $lecture_id,
            'reading_exam' => $readingExam,
            'reading_question_1' => $reading_question_1,
            'reading_answer_1' => $reading_answer_1,
            'reading_question_2' => $reading_question_2,
            'reading_answer_2' => $reading_answer_2,
            'reading_question_3' => $reading_question_3,
            'reading_answer_3' => $reading_answer_3,
            'pre_time' => $preTime,
            'start_time' => $now,
            'end_time' => $endTime
        ], 200);
    }


    public function storeResult(Request $request)
    {
        $result = new Result();
        $result->student_id = $request->input('student_id');
        $result->type = 1;
        $result->point = $request->input('point');
        $result->save();
        return response()->json($result, 200);
    }
}
