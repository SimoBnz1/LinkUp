<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostController extends Controller
{
      use AuthorizesRequests;
    public function feed()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('feed', compact('posts'));
    }

    public function storPost(PostRequest $request)
    {
        $request->validated();
        Post::create([
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('feed')->with('success', 'post est creer');
    }

    public function formPost()
    {
        return view('posts.createPost');
    }


    
}
