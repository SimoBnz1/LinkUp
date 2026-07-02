<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }
    public function login(LoginUserRequest $request)
    {
            $validated=$request->validated();
            if(Auth::attempt($validated)) 
              {
                return redirect()->route('feed');
              }
    }

    public function register(RegisterUserRequest $request)
    {
        $validated = $request->validated();
        
        $validated['password'] = Hash::make($validated['password']);

        $user=User::create($validated);
        Auth::login($user);
        return redirect()->route('feed');
      
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('/');
    }

    



}
