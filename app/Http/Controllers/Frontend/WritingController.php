<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Reading;
use App\ReadingQuestion;
use App\Writing;
use Illuminate\Http\Request;

class WritingController extends Controller
{
    public function writing()
    {
        return response([
            'writing'=>Writing::inRandomOrder()->first()
        ]);
    }
}
