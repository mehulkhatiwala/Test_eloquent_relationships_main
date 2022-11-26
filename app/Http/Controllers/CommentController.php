<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        // TASK: load the relationship average of team size
        $comments = Comment::with('task')->get();
        // dd($comments->toArray());
        return view('comments.index', compact('comments'));
    }
}
