<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\WritingResult;
use App\User;
use App\Writing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WritingController extends Controller
{
    public function index()
    {
        $write = Writing::all();
        return response()->json($write);
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
