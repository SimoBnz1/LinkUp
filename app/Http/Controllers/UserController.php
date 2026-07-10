<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser(User $user)
{
    $user->load('post.user'); 
    return view('profile.profile', compact('user'));
}

public function editProfile(User $user)
{
    return view('profile.editProfile',compact('user'));
}

public function updateProfile(Request $request, User $user)
{
    // 1. شد البيانات كاملة اللي صيفط المستخدم
    $data = $request->all();
    

    // 2. هاد السطر السحري غايحل المشكل: إيلا الخانة مبروك عليها غاتاخد true، إيلا مامعمرة ش غاتاخد false
    $data['is_open_to_work'] = $request->has('is_open_to_work');
    

    $user->update($data);

    return redirect()->route('profile', $user)->with('success', 'Profil mis à jour !');
}

}
