<?php

namespace App\Http\Controllers\Frontend;

use App\Examining;
use App\Http\Controllers\Controller;
use App\Listening;
use App\Reading;
use App\Writing;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function storeExam(Request $request){
        $student_id = $request->get('student_id');
        $randomReading = Reading::inRandomOrder()->limit(3)->get();
        $randomListening = Listening::inRandomOrder()->limit(3)->get();
        $randomWriting = Writing::inRandomOrder()->limit(2)->get();
        $exam = new Examining();
        $exam->student_id =$student_id;
        $exam->start_time = Carbon::now()->format('Y-m-d H:i:s');
        $exam->reading_question_1 = $randomReading[0]->id;
        $exam->reading_question_2 = $randomReading[1]->id;
        $exam->reading_question_3 = $randomReading[2]->id;
        $exam->listening_question_1 = $randomListening[0]->id;
        $exam->listening_question_2 = $randomListening[1]->id;
        $exam->listening_question_3 = $randomListening[2]->id;
        $exam->writing_question_1 = $randomWriting[0]->id;
        $exam->writing_question_2 = $randomWriting[1]->id;
        $exam->save();
    }
}
