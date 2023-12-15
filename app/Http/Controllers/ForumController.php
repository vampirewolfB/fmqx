<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Post;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::All();
        $posts = Post::All();
        return view('forum.index')->with(compact('comments', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        @$this->validate($request, [
            'subject' => 'required',
            'content' => 'required',
        ]);

        $post = new Post();

        $post->user_id = Auth::id();
        $post->subject = $request->subject;
        $post->content = $request->content;
        
        $post->save();

        return redirect()->route('forum.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
