<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Listening;
use App\ListeningQuestion;
use Illuminate\Http\Request;

class ListeningController extends Controller
{
    //listening
    public function createListening(Request $r)
    {
        $r->validate([
            'audio' => 'required | url'
        ]);
        $listening = new  Listening();
        $listening->audio = $r->input('audio');
        $listening->status = 1;
        $listening->save();
        return response()->json($listening);
    }

    public function getListen()
    {
        $listen = Listening::where('status', '=', 1)->get();
        foreach ($listen as $lis) {
            $lis->created_at_format = $lis->created_at ? $lis->created_at->format('d-m-Y') : "";
            $lis->updated_at_format = $lis->updated_at ? $lis->updated_at->format('d-m-Y') : "";
        }
        return response()->json($listen, 200);
    }

    public function updateListening(Request $r, $id)
    {
        $r->validate([
            'audio' => 'required | url'
        ]);
        $listening = Listening::find($id);
        $listening->audio = $r->input('audio');
        $listening->save();
        return response()->json($listening);
    }

    public function deleteListening($id)
    {
        $listening = Listening::find($id);
        $listening->status = 0;
        $listening->save();
        return response()->json($listening, 200);
    }

    //listening question
    public function createListeningQuestion(Request $r)
    {
        $r->validate([
            'listening_id' => 'required | Numeric',
            'title' => 'required',
            'answer' => 'required',
            'correct_answer' => 'required',
        ]);
        $question = new ListeningQuestion();
        $question->listening_id = $r->input('listening_id');
        $question->title = $r->input('title');
        $question->answer = $r->input('answer');
        $question->correct_answer = $r->input('correct_answer');
        $question->status = 1;
        $question->save();
        return response()->json($question, 200);
    }

    public function updateListeningQuestion(Request $r, $id)
    {
        $r->validate([
            'listening_id' => 'required | Numeric',
            'title' => 'required',
            'answer' => 'required',
            'correct_answer' => 'required',
        ]);
        $question = ListeningQuestion::find($id);
        $question->listening_id = $r->input('listening_id');
        $question->title = $r->input('title');
        $question->answer = $r->input('answer');
        $question->correct_answer = $r->input('correct_answer');
        $question->save();
        return response()->json($question, 200);
    }

    public function getListeningQuestion($id)
    {
        $listenQ = ListeningQuestion::where('listening_id', '=', $id)->where('status', '=', 1)->get();
        foreach ($listenQ as $lisQ) {
            $lisQ->created_at_format = $lisQ->created_at ? $lisQ->created_at->format('d-m-Y') : "";
            $lisQ->updated_at_format = $lisQ->updated_at ? $lisQ->updated_at->format('d-m-Y') : "";
        }
        return response()->json($listenQ, 200);
    }

    public function deleteListeningQuestion($id)
    {
        $question = ListeningQuestion::find($id);
        $question->status = 0;
        $question->save();
        return response()->json($question, 200);
    }
}
