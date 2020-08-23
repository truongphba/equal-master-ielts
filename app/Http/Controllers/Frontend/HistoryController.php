<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Result;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function history(Request $r)
    {
        $results = Result::where('student_id', 2)->orderBy('created_at', 'desc')->get();
        foreach ($results as $result) {
            $result->student_name=$result->student->full_name;
            $result->lecture_name=$result->lecture?$result->lecture->full_name:"";
        }
        return response([
            'history' => $results,
        ], 200);
    }
}
