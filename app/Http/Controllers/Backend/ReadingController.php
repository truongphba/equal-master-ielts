<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Reading;
use App\ReadingQuestion;
use Illuminate\Http\Request;

class ReadingController extends Controller
{
    //reading
    public function getRead(){
        $reads = Reading::where('status', '=', 1)->get();
        foreach ($reads as $read){
            $read->created_at_format = $read->created_at ? $read->created_at->format('d-m-Y') : "";
            $read->updated_at_format = $read->updated_at ? $read->updated_at->format('d-m-Y') : "";
        }
        return response()->json($reads, 200);
    }

    public function createReading(Request $r)
    {
        $r->validate([
            'content' => 'required'
        ]);
        $reading = new  Reading();
        $reading->content = $r->input('content');
        $reading->status = 1;
        $reading->save();
        return response()->json($reading);
    }

    public function updateReading(Request $r, $id)
    {
        $r->validate([
            'content' => 'required'
        ]);
        $reading = Reading::find($id);
        $reading->content = $r->input('content');
        $reading->save();
        return response()->json($reading, 200);
    }

    public function deleteReading($id)
    {
        $reading = Reading::find($id);
        $reading->status = 0;
        $reading->save();
        return response()->json($reading, 200);
    }

    //reading question
    public function getReadingQuestion($id)
    {
        $readQ = ReadingQuestion::where('reading_id', '=', $id)->where('status', '=', 1)->get();
        foreach ($readQ as $reaQ) {
            $reaQ->created_at_format = $reaQ->created_at ? $reaQ->created_at->format('d-m-Y') : "";
            $reaQ->updated_at_format = $reaQ->updated_at ? $reaQ->updated_at->format('d-m-Y') : "";
        }
        return response()->json($readQ, 200);
    }

    public function createReadingQuestion(Request $r)
    {
        $r->validate([
            'reading_id' => 'required | numeric | min: 1 ',
            'title' => 'required',
            'answer' => 'required',
            'correct_answer' => 'required',
        ]);
        $question = new ReadingQuestion();
        $question->reading_id = $r->input('reading_id');
        $question->title = $r->input('title');
        $question->answer = $r->input('answer');
        $question->correct_answer = $r->input('correct_answer');
        $question->status = 1;
        $question->save();
        return response()->json($question, 200);
    }

    public function updateReadingQuestion(Request $r, $id)
    {
        $r->validate([
            'reading_id' => 'required | numeric | min: 1 ',
            'title' => 'required',
            'answer' => 'required',
            'correct_answer' => 'required',
        ]);
        $question = ReadingQuestion::find($id);
        $question->reading_id = $r->input('reading_id');
        $question->title = $r->input('title');
        $question->answer = $r->input('answer');
        $question->correct_answer = $r->input('correct_answer');
        $question->save();
        return response()->json($question, 200);
    }

    public function deleteReadingQuestion($id)
    {
        $question = ReadingQuestion::find($id);
        $question->status = 0;
        $question->save();
        return response()->json($question, 200);
    }
}
