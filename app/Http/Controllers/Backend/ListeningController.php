<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Listening;
use App\ListeningQuestion;
use Illuminate\Http\Request;

class ListeningController extends Controller
{
    //listening
    public function createListening(Request $r)
    {
        $listening = new  Listening();
        $listening->audio = $r->get('content');
        $listening->status = 1;
        $listening->save();
        return response()->json($listening);
    }

    public function updateListening(Request $r)
    {
        $listening = Listening::find($r->get("id"));
        $listening->audio = $r->get('content');
        $listening->status = $r->get('status');
        $listening->save();
        return response()->json($listening);
    }

    public function readListening(Request $r)
    {
        $listening = Listening::find($r->get("id"));
        return response()->json($listening);
    }

    //listening question
    public function createListeningQuestion(Request $r)
    {
//        [rq1,rq2,rq3]
        if ($r) {
            foreach ($r as $i => $obj) {
                $listeningQ = new ListeningQuestion();
                $listeningQ->listening_id = $r->get('listening_id');
                $listeningQ->title = $r->get('title');
                $listeningQ->answer = $r->get('answer');
                $listeningQ->correct_answer = $r->get('correct_answer');
                $listeningQ->status = 1;
                $listeningQ->save();
            }
        }
    }

    public function updateListeningQuestion(Request $r)
    {
        if ($r) {
            foreach ($r as $i => $obj) {
                $listeningQ = new ListeningQuestion();
                $listeningQ->listening_id = $r->get('listening_id');
                $listeningQ->title = $r->get('title');
                $listeningQ->answer = $r->get('answer');
                $listeningQ->correct_answer = $r->get('correct_answer');
                $listeningQ->status = $r->get('status');
                $listeningQ->save();
            }
        }
    }

    public function readListeningQuestion(Request $r)
    {
        $listeningQ = ListeningAnswer::find($r->get("id"));
        return response()->json($listeningQ);
    }
}
