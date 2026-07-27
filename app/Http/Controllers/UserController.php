<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showUser(User $user)
    {
        $user->load('post.user');
        return view('profile.profile', compact('user'));
    }

    public function editProfile(User $user)
    {
        return view('profile.editProfile', compact('user'));
    }

    public function updateProfile(Request $request, User $user)
    {
        $data = $request->all();



        $data['is_open_to_work'] = $request->has('is_open_to_work');


        $user->update($data);

        return redirect()->route('profile', $user)->with('success', 'Profil mis à jour !');
    }
    public function toggleFollow(User $user)
    { if (Auth::id() === $user->id) {
            return back()->with('error', 'Vous cannot follow yourself.');
        }

       
        $user->followings()->toggle($user->id);

        return back();
    }

    
    public function hello(){
        return view("hello");
    }
}
