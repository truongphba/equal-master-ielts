<?php

namespace App\Http\Controllers\Frontend;

use App\Examining;
use App\Http\Controllers\Controller;
use App\Listening;
use App\Reading;
use App\Speaking;
use App\User;
use App\Writing;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    public function index()
    {
        $tea = User::where('is_lecture', 1)->where('status', 1)->orderBy('votes', 'desc')->get();
        $stu = User::where('is_lecture', 0)->where('status', 1)->orderBy('votes', 'desc')->get();
        $eLi = Listening::where('status', 1)->get();
        $esp = Speaking::where('status', 1)->get();
        $eWr = Writing::where('status', 1)->get();
        $eRe = Reading::where('status', 1)->get();
        return response([
            'teacher' => $tea,
            'student' => $stu,
            'examListenings' => $eLi,
            'examSpeakings' => $esp,
            'examWritings' => $eWr,
            'examReadings' => $eRe,
        ], 200);
    }

    public function getUser($id)
    {
        $user = User::where('id', $id)->first();
        return response([
            'user' => $user
        ], 200);
    }

    public function lectureExam(Request $request)
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        $exam = Examining::where('student_id', $request->get('member_id'))->first();
        $endTime = date('Y-m-d H:i:s', strtotime('+20 minutes 10 seconds', strtotime($exam->start_time)));
        $writing_question_1 = Writing::where('id',$exam->writing_question_1)->first();
        $writing_question_2 = Writing::where('id',$exam->writing_question_2)->first();
        $writing_answer_1 = $exam->writing_answer_1;
        $writing_answer_2 = $exam->writing_answer_2;
        return response()->json(['end_time' => $endTime,
            'writing_answer_1' => $writing_answer_1,
            'writing_answer_2' => $writing_answer_2,
            'writing_question_1' => $writing_question_1,
            'writing_question_2' => $writing_question_2
            ], 200);
    }
}
