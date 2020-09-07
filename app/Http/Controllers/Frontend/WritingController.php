<?php

namespace App\Http\Controllers\Frontend;

use App\Examining;
use App\Http\Controllers\Controller;
use App\Result;
use App\Writing;
use App\WritingAnswer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WritingController extends Controller
{
    public function writing()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        $isExamining = Examining::where('student_id', Auth::user()->id)->first();
        if (!isset($isExamining)){
            return response()->json(['status' => 0], 400);
        }
        $writingExam =  Examining::where('student_id', Auth::user()->id)->where('status', 1)->first();
        if (!isset($writingExam)) {
            return response()->json(['status' => $isExamining->status], 400);
        }
        $preTime = date('Y-m-d H:i:s', strtotime('+10 seconds', strtotime($writingExam->start_time)));
        $endTime = date('Y-m-d H:i:s', strtotime('+20 minutes 10 seconds', strtotime($writingExam->start_time)));
        if (strtotime($now) >= strtotime($endTime)) {
            Examining::where('student_id', Auth::id())->update(['status' => 2]);
            return response()->json(['status' => Examining::where('student_id', Auth::user()->id)->first()->status], 400);
        }
        $lecture_id = $isExamining->lecture_id;
        $writing_question_1 = Writing::where('id', $writingExam->writing_question_1)->first();
        $writing_question_2 = Writing::where('id', $writingExam->writing_question_1)->first();

        return response()->json([
            'lecture_id' => $lecture_id,
            'writing_exam' => $writingExam,
            'writing_question_1' => $writing_question_1,
            'writing_question_2' => $writing_question_2,
            'pre_time' => $preTime,
            'start_time' => $now,
            'end_time' => $endTime
        ], 200);
    }

    public function storeResult(Request $request){
        $result = new WritingAnswer();
        $result->writing_id = $request->input('writing_id');
        $result->student_id = $request->input('student_id');
        $result->answer = $request->input('answer');
        $result->save();
        return response($result, 200);
    }

}
