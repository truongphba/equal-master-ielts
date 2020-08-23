<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Result;
use App\User;
use App\WritingResult;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function listenHistory($id)
    {
        $results = Result::where('student_id', '=', $id)->where('type', '=', 2)->orderBy('created_at', 'desc')->get();
        foreach ($results as $result) {
            $result->student_name=$result->student->full_name;
            $result->lecture_name=$result->lecture?$result->lecture->full_name:"";
        }
        return response()->json($results, 200);
    }

    public function speakHistory($id){
        $results = Result::where('student_id', '=', $id)->where('type', '=', 3)->orderByDesc('created_at')->get();
        foreach ($results as $result) {
            $result->student_name=$result->student->full_name;
            $result->lecture_name=$result->lecture?$result->lecture->full_name:"";
        }
        return response()->json($results, 200);
    }

    public function readHistory($id){
        $results = Result::where('student_id', '=', $id)->where('type', '=', 1)->orderByDesc('created_at')->get();
        foreach ($results as $result) {
            $result->student_name=$result->student->full_name;
            $result->lecture_name=$result->lecture?$result->lecture->full_name:"";
        }
        return response()->json($results, 200);
    }

    public function writeHistory($id){
        $results = WritingResult::where('student_id', '=', $id)->orderByDesc('created_at')->get();
        foreach ($results as $result){
            $result->student_name=$result->student->full_name;
            $result->lecture_name=$result->lecture?$result->lecture->full_name:"";
            $result->answer=$result->writingAnswer->answer;
        }
        return response()->json($results, 200);
    }
}
