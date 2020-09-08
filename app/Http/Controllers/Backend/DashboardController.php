<?php

namespace App\Http\Controllers\Backend;

use App\exam;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function getMoney(){
        $moneys = exam::all();
        foreach ($moneys as $money) {
            $money->student_name=$money->student?$money->student->full_name:"";
            $money->lecture_name=$money->lecture?$money->lecture->full_name:"";
            $money->created_at_format=$money->created_at?$money->created_at->format('Y/m/d'):"";
            $money->created_at_year=$money->created_at?$money->created_at->format('d/m'):"";
            $money->updated_at_format=$money->updated_at?$money->updated_at->format('d-m-Y'):"";
        }
        return response()->json($moneys, 200);
    }

    public function getTotalMoney(){
        $totals = DB::table('exams')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('sum(money) as total'))
            ->groupBy('date')
            ->get();
        return response()->json($totals);
    }
}
