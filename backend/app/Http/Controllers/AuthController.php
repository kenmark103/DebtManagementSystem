<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

        public function login(Request $request)
    {
        $credentials = $request->only('email-username', 'password');

        $field = filter_var($credentials['email-username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$field => $credentials['email-username'], 'password' => $credentials['password']])) {
            $user = Auth::user();
            
            return redirect()->route('dashboard.show')->with('user', $user);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }

        public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email|unique:employees',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $user = Employee::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2, //making default role to user
        ]);

        // Automatically log in the user
        Auth::login($user);

        // Redirect to the dashboard
        return redirect()->route('dashboard.show')->with('user', $user);
    }


        public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth-login-basic');
    }

    public function forgotPasswordBasic(){
        return view ('authentications.auth-forgot-password-basic');
    }

    public function loginBasic(){
        return view ('authentications.auth-login-basic');
    }

     public function registerBasic(){
        return view ('authentications.auth-register-basic');
    }

}
