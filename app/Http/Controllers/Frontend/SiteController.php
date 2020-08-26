<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Listening;
use App\Reading;
use App\Speaking;
use App\User;
use App\Writing;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $tea = User::where('is_lecture', 1)->where('status', 1)->orderBy('votes', 'desc')->get();
        $stu = User::where('is_lecture', 0)->where('status', 1)->orderBy('votes', 'desc')->get();
        $eLi = Listening::where('status', 1)->get();
        $esp = Speaking::where('status', 1)->get();
        $eWr = Writing::where('status', 1)->get();
        $eRe = Reading::where('status', 1)->get();
        return response([
            'teacher' => $tea,
            'student' => $stu,
            'examListenings' => $eLi,
            'examSpeakings' => $esp,
            'examWritings' => $eWr,
            'examReadings' => $eRe,
        ], 200);
    }

    public function getLecture($id)
    {
        $lecture = User::where('id', $id)->first();
        return response([
            'lecture' => $lecture
        ],200);
    }
}
