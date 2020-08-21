<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Result;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $result = Result::all();
        return response()->json($result);
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
