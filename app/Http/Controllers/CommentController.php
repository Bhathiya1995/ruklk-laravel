<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Thread;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    
public function addThreadComment(Request $request, Thread $thread)
    
{
    $this->validate($request,[
        'body'=>'required'
    ]);

    $comment=new Comment();
    $comment->body=$request->body;
    //$comment->userauth is not there as all users can comment

    $thread->comments()->save($comment);
    return back()->withMessage('Comment Created');
}




   

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
