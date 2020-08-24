<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Product;
use App\Reading;
use App\ReadingQuestion;
use App\Writing;
use App\WritingAnswer;
use Illuminate\Http\Request;

class WritingController extends Controller
{
    public function writing()
    {
        return response([
            'writing'=>Writing::inRandomOrder()->first()
        ]);
    }
    //writing
    public function createWriting(Request $r)
    {
        $w = new  Writing();
        $w->content = $r->get('content');
        $w->status = 1;
        $w->save();
        return response()->json($w);
    }
    public function updateWriting(Request $r) //delete = update 'status'
    {
        $w = Writing::find($r->get("id"));
        $w->content = $r->get('content');
        $w->status = $r->get('status');
        $w->save();
        return response()->json($w);
    }
    public function readWriting(Request $r) //delete = update 'status'
    {
        $w = Writing::find($r->get("id"));
        return response()->json($w);
    }
    //anser
    public function createWritingAnswer(Request $r)
    {
        $wA = new  WritingAnswer();
        $wA->writing_id = $r->get('writing_id');
        $wA->student_id = $r->get('student_id');
        $wA->answer = $r->get('answer');
        $wA->status = 1;
        $wA->save();
        return response()->json($wA);
    }
    public function updateWritingAnswer(Request $r) //delete = update 'status'
    {
        $wA = WritingAnswer::find($r->get("id"));
        $wA->writing_id = $r->get('writing_id');
        $wA->student_id = $r->get('student_id');
        $wA->answer = $r->get('answer');
        $wA->status = $r->get('status');
        $wA->save();
        return response()->json($wA);
    }
    public function readWritingAnswer(Request $r) //delete = update 'status'
    {
        $wA = WritingAnswer::find($r->get("id"));
        return response()->json($wA);
    }
    //result
    public function createWritingResult(Request $r)
    {
        $wR = new  WritingResult();
        $wR->student_id = $r->get('student_id');
        $wR->lecture_id = $r->get('lecture_id');
        $wR->lecture_id = $r->get('lecture_id');
        $wR->point = $r->get('point');
        $wR->comment = $r->get('comment');
        $wR->status = 1;
        $wR->save();
        return response()->json($wR);
    }
    public function updateWritingResult(Request $r) //delete = update 'status'
    {
        $wR = WritingResult::find($r->get("id"));
        $wR->writing_id = $r->get('writing_id');
        $wR->student_id = $r->get('student_id');
        $wR->answer = $r->get('answer');
        $wR->status = $r->get('status');
        $wR->save();
        return response()->json($wR);
    }
    public function readWritingResult(Request $r) //delete = update 'status'
    {
        $wR = WritingResult::find($r->get("id"));
        return response()->json($wR);
    }
}
