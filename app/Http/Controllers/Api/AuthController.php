<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //login
    public function login(Request $request) {
        //validate request email and password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //if credential are corrrect
        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response([
                'message' => ['These credential do not match our records.']
            ], 404);
        }

        $token = $user->createToken('hrm-token')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token,
        ], 200);
    }

    //logout
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();

        return response([
            'message' => 'Logged out'
        ], 200);
    }
}
