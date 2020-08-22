<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Listening;
use App\ListeningQuestion;
use Illuminate\Http\Request;

class ListeningController extends Controller
{
    public function listening()
    {
        $listening=Listening::inRandomOrder()->first();
        $listeningQuestion=ListeningQuestion::where('listening_id',$listening->id)->get();
        return response([
            'listening'=>$listening,
            'listeningQuestion'=>$listeningQuestion
        ]);
    }
}
