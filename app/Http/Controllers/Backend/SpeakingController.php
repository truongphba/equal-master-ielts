<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Speaking;
use Illuminate\Http\Request;

class SpeakingController extends Controller
{
    public function createSpeaking(Request $r)
    {
        $r->validate([
            'content' => 'required'
        ]);
        $speaking = new  Speaking();
        $speaking->content = $r->get('content');
        $speaking->status = 1;
        $speaking->save();
        return response()->json($speaking);
    }

    public function updateSpeaking(Request $r)
    {
        $r->validate([
            'content' => 'required'
        ]);
        $speaking = Speaking::find($r->get("id"));
        $speaking->content = $r->get('content');
        $speaking->status = $r->get('status');
        $speaking->save();
        return response()->json($speaking);
    }

    public function readSpeaking(Request $r)
    {
        $speaking = Speaking::find($r->get("id"));
        return response()->json($speaking);
    }
}
