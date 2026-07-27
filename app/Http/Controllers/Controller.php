<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Controller
{
    public function index()
    {
        return view('index');
    }

    public function profile()
{
    $user = Auth::user();

    return view('profile.MyProfile', compact('user'));
}

}
