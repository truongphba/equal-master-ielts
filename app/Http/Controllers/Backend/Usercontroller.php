<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function createUser(Request $request)
    {
        if ($request->input('is_lecture') == true) {
            $request->validate([
                'name' => 'required|min:3|unique:App\User,name',
                'email' => 'required|unique:App\User,email|email',
                'password' => 'required|min:3',
                'age' => 'numeric',
                'certificate' => 'required',
            ]);
            $is_lecture = 1;
        } else {
            $request->validate([
                'name' => 'required|min:3|unique:App\User,name',
                'email' => 'required|unique:App\User,email|email',
                'password' => 'required|min:3',
                'age' => 'numeric',
            ]);
            $is_lecture = 0;
        }
        $user = User::insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'full_name' => $request->input('full_name'),
            'age' => $request->input('age'),
            'balance' => 0,
            'certificate' => $request->input('certificate'),
            'votes' => 5,
            'is_admin' => 0,
            'is_lecture' => $is_lecture,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        return response([
            'user' => $user
        ], 200);
    }

    public function updateUser(Request $r, $id) //delete = update 'status'
    {

        if ($r->input('position') == "Lecturer") {
            $r->validate([
                'name' => 'required',
                'email' => 'required|email',
                'age' => 'numeric',
                'certificate' => 'required',
            ]);
            $is_lecture = 1;
            $is_admin = 0;
        }
        if ($r->input('position') == "Student") {
            $r->validate([
                'name' => 'required',
                'email' => 'required| email|email',
                'age' => 'numeric',
            ]);
            $is_lecture = 0;
            $is_admin = 0;
        }
        if ($r->input('position') == "Admin") {
            $r->validate([
                'name' => 'required',
                'email' => 'required| email|email',
                'age' => 'numeric',
            ]);
            $is_lecture = 0;
            $is_admin = 1;
        }
        if ($r->input('textStatus') == "Active") {
            $status = 1;
        }
        if ($r->input('textStatus') == "Deactive") {
            $status = 0;
        }
        if ($r->input('textStatus') == "Lock") {
            $status = -1;
        }
        $u = User::find($id);
        $u->name = $r->input('name');
        $u->email = $r->input('email');
        $u->full_name = $r->input('full_name');
        $u->age = $r->input('age');
        $u->balance = $r->input('balance');
        $u->certificate = $r->input('certificate');
        $u->is_admin = $is_admin;
        $u->is_lecture = $is_lecture;
        $u->status = $status;
        $u->save();
        return response()->json($u, 200);
    }

    public function readUser(Request $r) //delete = update 'status'
    {
        $u = User::find($r->get("id"));
        return response()->json($u);
    }

    public function getUser()
    {
        $users = User::all();
        foreach ($users as $user) {
            $user->format_date = $user->created_at ? $user->created_at->format('d-m-Y') : "";
            if ($user->is_lecture == 1 && $user->is_admin == 0) {
                $user->position = "Lecturer";
            }
            if ($user->is_lecture == 0 && $user->is_admin == 0) {
                $user->position = "Student";
            }
            if ($user->is_lecture == 0 && $user->is_admin == 1 || $user->is_lecture == 1 && $user->is_admin == 1) {
                $user->position = "Admin";
            }
            if ($user->status == 1) {
                $user->textStatus = "Active";
            }
            if ($user->status == 0) {
                $user->textStatus = "Deactive";
            }
            if ($user->status == -1) {
                $user->textStatus = "Lock";
            }
        }
        return response()->json($users, 200);

    }
}
