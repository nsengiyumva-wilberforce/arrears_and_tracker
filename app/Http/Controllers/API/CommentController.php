<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //store a new comment
    public function store(Request $request)
    {
        $request->validate(
            [
                'comment' => 'required',
            ]
        );

        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->customer_id = $request->customer_id;
        $comment->staff_id = auth()->user()->staff_id;
        $comment->save();

        return response()->json(['comment' => $comment], 201);
    }

    //get all comments
    public function getComments()
    {
        //get all comments with customer
        $comments = Comment::with('customer')->get();
        return response()->json(['comments' => $comments], 200);
    }
}