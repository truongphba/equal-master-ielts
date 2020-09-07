<?php

namespace App\Http\Controllers\Backend;

use App\exam;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function getMoney(){
        $moneys = exam::all();
        foreach ($moneys as $money) {
            $money->student_name=$money->student?$money->student->full_name:"";
            $money->lecture_name=$money->lecture?$money->lecture->full_name:"";
            $money->created_at_format=$money->created_at?$money->created_at->format('d-m-Y'):"";
            $money->updated_at_format=$money->updated_at?$money->updated_at->format('d-m-Y'):"";
        }
        return response()->json($moneys, 200);
    }
}
