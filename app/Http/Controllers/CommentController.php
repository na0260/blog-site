<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class CommentController extends Controller
{
    public function index()
    {
        $comments         = Comment::all();
        return view('backend.comment.manage', ['comments' => $comments]);
    }
    public function comment_store(Request $req)
    {
        $comment                        = new Comment;
        $comment->blog_id               = $req->blog_id;
        $comment->username              = $req->username;
        $comment->email                 = $req->email;
        $comment->message               = $req->message;
        $comment->save();
        return redirect()->back();
    }
    public function delete($comId)
    {
        $comment                       = Comment::find($comId);
        $comment->delete();
        return redirect()->back()->with('msg', 'Comment has been removed successfully');
    }
}
