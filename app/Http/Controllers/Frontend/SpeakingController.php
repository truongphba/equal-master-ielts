<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Reading;
use App\Speaking;
use Illuminate\Http\Request;

class SpeakingController extends Controller
{
    public function speaking(){
        $speakingQuestion = Speaking::where('status',1)->inRandomOrder()->first()->content;
        return response()->json([
            'speaking_question' => $speakingQuestion
        ],200);
    }
}
