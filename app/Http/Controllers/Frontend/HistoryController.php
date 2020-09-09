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
    public function history($id)
    {
        $results = Result::where('student_id', '=', $id)->orderBy('created_at', 'desc')->get();
        foreach ($results as $result) {
            $result->student_name=$result->student?$result->student->full_name:"";
            $result->lecture_name=$result->lecture?$result->lecture->full_name:"";
            $result->created_at_format=$result->created_at?$result->created_at->format('d-m-Y'):"";
            $result->updated_at_format=$result->updated_at?$result->updated_at->format('d-m-Y'):"";
        }
        return response()->json($results, 200);
    }

    public function lecturerHistory($id)
    {
        $results = Result::where('lecture_id', '=', $id)->orderBy('created_at', 'desc')->get();
        foreach ($results as $result) {
            $result->student_name=$result->student?$result->student->full_name:"";
            $result->lecture_name=$result->lecture?$result->lecture->full_name:"";
            $result->created_at_format=$result->created_at?$result->created_at->format('d-m-Y'):"";
            $result->updated_at_format=$result->updated_at?$result->updated_at->format('d-m-Y'):"";
        }
        return response()->json($results, 200);
    }
}
