<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Reading;
use App\ReadingQuestion;
use Illuminate\Http\Request;

class ReadingController extends Controller
{
    //reading
    public function createReading(Request $r)
    {
        $reading = new  Reading();
        $reading->content = $r->get('content');
        $reading->status = 1;
        $reading->save();
        return response()->json($reading);
    }

    public function updateReading(Request $r)
    {
        $reading = Reading::find($r->get("id"));
        $reading->content = $r->get('content');
        $reading->status = $r->get('status');
        $reading->save();
        return response()->json($reading);
    }

    public function readReading(Request $r)
    {
        $reading = Reading::find($r->get("id"));
        return response()->json($reading);
    }

    //reading question
    public function createReadingQuestion(Request $r)
    {
//        [rq1,rq2,rq3]
        if ($r) {
            foreach ($r as $i => $obj) {
                $rq = new ReadingQuestion();
                $rq->reading_id = $r->get('reading_id');
                $rq->title = $r->get('title');
                $rq->answer = $r->get('answer');
                $rq->correct_answer = $r->get('correct_answer');
                $rq->status = 1;
                $rq->save();
            }
        }
    }

    public function updateReadingQuestion(Request $r)
    {
        if ($r) {
            foreach ($r as $i => $obj) {
                $rq = new ReadingQuestion();
                $rq->reading_id = $r->get('reading_id');
                $rq->title = $r->get('title');
                $rq->answer = $r->get('answer');
                $rq->correct_answer = $r->get('correct_answer');
                $rq->status = $r->get('status');
                $rq->save();
            }
        }
    }

    public function readReadingQuestion(Request $r)
    {
        $rq = ReadingAnswer::find($r->get("id"));
        return response()->json($rq);
    }
}
