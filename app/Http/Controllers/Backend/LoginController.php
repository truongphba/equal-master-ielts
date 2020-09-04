<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');
        $admin = User::where('name', $request->input('name'))->first();
        if (!($token = JWTAuth::attempt($credentials)) || $admin->is_admin == 0) {
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
        $admin = Auth::user();

        if ($admin) {
            return response()->json(['admin' => $admin],200);
        }

        return response()->json(null, 401);
    }
}
