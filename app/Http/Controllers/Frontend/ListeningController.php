<?php

namespace App\Http\Controllers\Frontend;

use App\Examining;
use App\Http\Controllers\Controller;
use App\Listening;
use App\ListeningQuestion;
use App\Result;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListeningController extends Controller
{
    public function listening(Request $request)
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        $isExamining = Examining::where('student_id', Auth::user()->id)->first();
        if (!isset($isExamining)) {
            return response()->json(['status' => 0], 400);
        }
        $listeningExam = $isExamining->where('status', 3)->first();
        if (!isset($listeningExam)) {
            return response()->json(['status' => $isExamining->status], 400);
        }
        $preTime = date('Y-m-d H:i:s', strtotime('+10 seconds', strtotime($listeningExam->start_time)));
        $endTime = date('Y-m-d H:i:s', strtotime('+20 minutes 10 seconds', strtotime($listeningExam->start_time)));
        if (strtotime($now) >= strtotime($endTime)) {
            Examining::where('student_id', Auth::id())->update(['status' => 4]);
            return response()->json(['status' => Examining::where('student_id', Auth::user()->id)->first()->status], 400);
        }
        $lecture_id = $isExamining->lecture_id;
        $listening_question_1 = Listening::where('id', $listeningExam->listening_question_1)->first();
        $listening_answer_1 = ListeningQuestion::where('listening_id', $listening_question_1->id)->get();
        $listening_question_2 = Listening::where('id', $listeningExam->listening_question_2)->first();
        $listening_answer_2 = ListeningQuestion::where('listening_id', $listening_question_2->id)->get();
        $listening_question_3 = Listening::where('id', $listeningExam->listening_question_3)->first();
        $listening_answer_3 = ListeningQuestion::where('listening_id', $listening_question_3->id)->get();
        return response()->json([
            'lecture_id' => $lecture_id,
            'listening_exam' => $listeningExam,
            'listening_question_1' => $listening_question_1,
            'listening_answer_1' => $listening_answer_1,
            'listening_question_2' => $listening_question_2,
            'listening_answer_2' => $listening_answer_2,
            'listening_question_3' => $listening_question_3,
            'listening_answer_3' => $listening_answer_3,
            'pre_time' => $preTime,
            'start_time' => $now,
            'end_time' => $endTime
        ], 200);
    }


    public function storeResult(Request $request)
    {
        $result = new Result();
        $result->student_id = $request->input('student_id');
        $result->type = 2;
        $result->point = $request->input('point');
        $result->save();
        return response()->json($result, 200);
    }
}
