<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Writing;
use App\WritingAnswer;
use Illuminate\Http\Request;

class WritingController extends Controller
{
    //writing
    public function getWrite(){
        $writes = Writing::where('status', '=', 1)->get();
        foreach ($writes as $write){
            $write->created_at_format = $write->created_at ? $write->created_at->format('d-m-Y') : "";
            $write->updated_at_format = $write->updated_at ? $write->updated_at->format('d-m-Y') : "";
        }
        return response()->json($writes, 200);
    }

    public function createWriting(Request $r)
    {
        $writing = new  Writing();
        $writing->content = $r->input('content');
        $writing->status = 1;
        $writing->save();
        return response()->json($writing);
    }

    public function updateWriting(Request $r, $id)
    {
        $writing = Writing::find($id);
        $writing->content = $r->input('content');
        $writing->save();
        return response()->json($writing, 200);
    }

    public function deleteWriting($id)
    {
        $writing = Writing::find($id);
        $writing->status = 0;
        $writing->save();
        return response()->json($writing, 200);
    }

    //writing answer
    public function getWritingAnswer($id){
        $writeA = WritingAnswer::where('writing_id', '=', $id)->where('status', '=', 1)->get();
        foreach ($writeA as $answer){
            $answer->created_at_format = $answer->created_at ? $answer->created_at->format('d-m-Y') : "";
            $answer->updated_at_format = $answer->updated_at ? $answer->updated_at->format('d-m-Y') : "";
            $answer->student_name=$answer->student?$answer->student->full_name:"";
        }
        return response()->json($writeA, 200);
    }
    public function deleteWritingAnswer($id)
    {
        $writeA = WritingAnswer::find($id);
        $writeA->status = 0;
        $writeA->save();
        return response()->json($writeA, 200);
    }

}
