<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

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
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (!($token = JWTAuth::attempt($credentials))) {
            return response()->json([
                'error' => true,
            ], 400);
        }

        return response()->json(['token' => $token],200);
    }
    public function logout(Request $request)
    {
        $this->validate($request, ['token' => 'required']);

        try {
            JWTAuth::invalidate($request->input('token'));
            return response()->json('You have successfully logged out.', 200);
        } catch (JWTException $e) {
            return response()->json('Failed to logout, please try again.', 400);
        }
    }

    public function user()
    {
        $user = Auth::user();

        if ($user) {
            return response()->json(['user' => $user],200);
        }

        return response()->json(null, 401);
    }
}
