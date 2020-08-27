<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
//$table->id();
//$table->string('name');
//$table->string('email')->unique();
//$table->timestamp('email_verified_at')->nullable();
//$table->string('password');
//$table->rememberToken();
//$table->string('full_name')->nullable();
//$table->integer('age')->nullable();
//$table->double('balance')->default(0);
//$table->string('avatar')->nullable();
//$table->text('certificate')->nullable();
//$table->integer('votes')->nullable();
//$table->tinyInteger('is_admin')->default(0);
//$table->tinyInteger('is_lecture');
//$table->tinyInteger('status')->default(1);
//$table->timestamps();
    public function createUser(Request $r)
    {
        $u = new  User();
        $u->name = $r->get('name');
        $u->email = $r->get('email');
        $u->email_verified_at = $r->get('email_verified_at');
        $u->full_name = $r->get('full_name');
        $u->age = $r->get('age');
        $u->balance = $r->get('balance') ? get('balance') : 0;
        $u->avatar = $r->get('avatar');
        $u->certificate = $r->get('certificate');
        $u->votes = $r->get('votes') ? get('votes') : 0;
        $u->is_admin = $r->get('is_admin') ? $r->get('is_admin') : 0;
        $u->is_lecture = $r->get('is_lecture') ? $r->get('is_lecture') : 0;
        $u->status = 1;
        $u->save();
        return response()->json($u);
    }

    public function updateUser(Request $r) //delete = update 'status'
    {
        $u = User::find($r->get("id"));
        $u->name = $r->get('name');
        $u->email = $r->get('email');
        $u->email_verified_at = $r->get('email_verified_at');
        $u->full_name = $r->get('full_name');
        $u->age = $r->get('age');
        $u->balance = $r->get('balance') ? get('balance') : 0;
        $u->avatar = $r->get('avatar');
        $u->certificate = $r->get('certificate');
        $u->votes = $r->get('votes') ? get('votes') : 0;
        $u->is_admin = $r->get('is_admin') ? $r->get('is_admin') : 0;
        $u->is_lecture = $r->get('is_lecture') ? $r->get('is_lecture') : 0;
        $u->status = $r->get('status');
        $u->save();
        return response()->json($u);
    }

    public function readUser(Request $r) //delete = update 'status'
    {
        $u = User::find($r->get("id"));
        return response()->json($u);
    }

    public function getUser(){
        $users = User::all();
        foreach ($users as $user){
            $user->format_date = $user->created_at?$user->created_at->format('d-m-Y'):"";
        }
        return response()->json($users, 200);

    }
}
