<?php

namespace App\Http\Controllers\Frontend;

use App\Examining;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpeakingExamController extends Controller
{
    public function speaking(Request $request)
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        $isExamining = Examining::where('student_id', Auth::user()->id)->first();
        if ($isExamining->status == 5) {
            return response()->json(null, 200);
        }

        $speakingExam = $isExamining->where('status', 4)->first();
        if (!isset($speakingExam)) {
            return response()->json(['status' => $isExamining->status], 400);
        }
        $preTime = date('Y-m-d H:i:s', strtotime('+10 seconds', strtotime($speakingExam->start_time)));
        $endTime = date('Y-m-d H:i:s', strtotime('+20 minutes 10 seconds', strtotime($speakingExam->start_time)));
        if (strtotime($now) >= strtotime($endTime)) {
            Examining::where('student_id', Auth::id())->update(['status' => 5]);
            return response()->json(['status' => Examining::where('student_id', Auth::user()->id)->first()->status], 400);
        }
        return response()->json([
            'pre_time' => $preTime,
            'start_time' => $now,
            'end_time' => $endTime
        ], 200);
    }
}
