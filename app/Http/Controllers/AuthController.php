<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Dotenv\Store\File\Reader;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        // dd($request->device_name)

        $request->validate([
            'email' => 'required|email|unique',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Wrong password or email']);
        }

        return $user->createToken($user->name)->plainTextToken;
        // validate
    }

    public function register(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create($request->input());

        return $user->createToken($user->name)->plainTextToken;

    }
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out']); 
    }
}
