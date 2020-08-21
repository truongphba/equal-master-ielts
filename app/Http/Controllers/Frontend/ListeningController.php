<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Listening;
use Illuminate\Http\Request;

class ListeningController extends Controller
{
    public function index()
    {
        $listen = Listening::all();
        return response()->json($listen);
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
