<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\ReadingQuestion;
use App\Reading;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReadingController extends Controller
{
        public function index()
    {
        $read = Reading::all();
        return response()->json($read);
    }


        public function store(Request $request)
    {
        //
    }


        public function show($id)
    {
        //
    }


        public function update(Request $request, $id)
    {
        //
    }


        public function destroy($id)
    {
        //

    }
}
