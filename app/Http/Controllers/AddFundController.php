<?php

namespace App\Http\Controllers;

use App\AddFund;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddFundController extends Controller
{
    public function create(Request $request){
        $addfund = new AddFund();
        $addfund->user_id = $request->input('user_id');
        $addfund->amount = $request->input('amount');
        $addfund->status = 1;
        $addfund->save();
        return response()->json($addfund, 200);
    }

    public function getFundAdmin(){
        $addfund = AddFund::where('status', '!=', 0)->get();
        foreach ($addfund as $fund){
            $fund->user_name=$fund->user?$fund->user->full_name:"";
            $fund->format_created_at = $fund->created_at ? $fund->created_at->format('d-m-Y') : "";
            $fund->format_updated_at = $fund->updated_at ? $fund->updated_at->format('d-m-Y') : "";
            if ($fund->status == 1){
                $fund->textStatus = "Pending";
            }
            if ($fund->status == 2){
                $fund->textStatus = "Success";
            }
        }
        return response()->json($addfund, 200);
    }

    public function updateFund(Request $request, $id){
        if ($request->input('textStatus') == "Success"){
            $status = 2;
        }
        if ($request->input('textStatus') == "Pending"){
            $status = 1;
        }
        DB::beginTransaction();
        try {
            $fund = AddFund::find($id);
            $fund->status = $status;
            $fund->save();
            if ($fund->status == 2){
                $user = User::find($fund->user_id);
                $user->balance += $fund->amount;
                $user->save();
            }
            DB::commit();
            return response()->json($fund, 200);
        }catch (\Exception $e){
            DB::rollBack();
            return response()->json($e, 400);
        }


    }

    public function deleteFund($id){
        $fund = AddFund::find($id);
        $fund->status = 0;
        $fund->save();
        return response()->json($fund, 200);
    }
}
