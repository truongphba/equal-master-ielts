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

class ReadingController extends Controller
{
    public function reading(Request $request)
    {
        $now = strtotime(Carbon::now());
        $readingExam = Examining::where('student_id', $request->student_id)->where('status', 1)->first();
        $reading_question_1 = Reading::where('id', $readingExam->reading_question_1)->first();
        $reading_question_2 = Reading::where('id', $readingExam->reading_question_2)->first();
        $reading_question_3 = Reading::where('id', $readingExam->reading_question_2)->first();
        $endTime = strtotime($readingExam->start_time) + 20000;
        if ($now >= $endTime) {
            return response()->json(null, 400);
        } else {
            return response()->json([
                'reading_question_1' => $reading_question_1,
                'reading_question_2' => $reading_question_2,
                'reading_question_3' => $reading_question_3,
                'start_time' => $now,
                'end_time' => $endTime
            ], 200);
        }
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
