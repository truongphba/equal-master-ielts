<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
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
        }
        else{
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
    public function login()
    {
        $credentials = request(['email', 'password']);
        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json(auth('api')->user())->header('Authorization', $token);
    }
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function user()
    {
        return response()->json(auth('api')->user());
    }
}
