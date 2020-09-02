<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Result;
use App\Writing;
use App\WritingAnswer;
use Illuminate\Http\Request;

class WritingController extends Controller
{
    public function writing()
    {
        $write = Writing::inRandomOrder()->first();
        return response()->json($write, 200);
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
