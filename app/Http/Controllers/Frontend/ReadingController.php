<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Reading;
use Illuminate\Http\Request;

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
