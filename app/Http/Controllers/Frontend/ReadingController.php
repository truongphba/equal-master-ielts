<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Listening;
use App\ListeningQuestion;
use App\Reading;
use App\ReadingQuestion;
use App\Result;
use Illuminate\Http\Request;

class ReadingController extends Controller
{
    public function reading()
    {
        $reading = Reading::inRandomOrder()->first();
        $readingQuestion = ReadingQuestion::where('reading_id', $reading->id)->get();
        return response()->json([$reading, $readingQuestion], 200);
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
