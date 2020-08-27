<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Listening;
use App\ListeningQuestion;
use App\Result;
use Illuminate\Http\Request;

class ListeningController extends Controller
{
    public function listening()
    {
        $listening=Listening::inRandomOrder()->first();
        $listeningQuestion=ListeningQuestion::where('listening_id',$listening->id)->get();
        return response()->json([$listening, $listeningQuestion], 200);
    }

    public function storeResult(Request $request){
        $result = new Result();
        $result->student_id = $request->input('student_id');
        $result->type = 2;
        $result->point = $request->input('point');
        $result->save();
        return response()->json($result, 200);
    }
}
