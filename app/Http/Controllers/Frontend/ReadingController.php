<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Listening;
use App\ListeningQuestion;
use App\Reading;
use App\ReadingQuestion;
use Illuminate\Http\Request;

class ReadingController extends Controller
{
        public function reading()
    {
        $reading=Reading::inRandomOrder()->first();
        $readingQuestion=ReadingQuestion::where('reading_id',$reading->id)->get();
        return response([
            'listening'=>$reading,
            'listeningQuestion'=>$readingQuestion
        ]);
    }
}
