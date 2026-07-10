<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Requests\PostRequest;
use App\Models\Comment;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostController extends Controller
{
    use AuthorizesRequests;
    public function feed(Request $request)
    {
        $query = Post::with('user')->latest();

        if ($request->has('company') && $request->company != '') {

            $query->whereHas('user', function ($q) use ($request) {

                $q->where('company', $request->company);
            });
        }
        $posts = $query->get();

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


    public function PageUpdate(Post $post)
    {
        return view('posts.updatePost', compact('post'));
    }

    public function updatePost(Request $request, Post $post)
    {
        $this->authorize('update', $post);
        $post->update([
            'content' => $request->content
        ]);
        return redirect()->route('feed')->with('success', 'post deleted seccessfully');
    }

    public function deletePost(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return redirect()->route('feed')->with('success', 'post deleted seccessfully');
    }

    public function storeComment(CommentRequest $request, Post $post)
    {
        $post->comments()->create([
            'user_id' => Auth::id(),
            'content' => $request->content
        ]);
        return back();
    }
    public function deletComment(Comment $comment)
    {
        $this->authorize('delete',$comment);
        $comment->delete();
        return redirect()->route('feed');
    }

    public function toggelLike(Post $post)
    {
        $post->likes()->toggle(Auth::id());
        return redirect()->route('feed');
    }
}
