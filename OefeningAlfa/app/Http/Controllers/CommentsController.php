<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\comment;
use Auth;

class CommentsController extends Controller
{
	public function comment(){
		$comments = comment::get();
		// dd($comment);
		return view('pages.comments',compact('comments'));
	}



		public function store(Comment $comments)
	{
		$comment = new Comment;
		$comment->body = request('body');
		$comment->product_id = request('product_id');
		$comment->title = request('title');
		$comment->user_id = Auth::user()->id;


		$comment->save();
	}


	public function destroy($id)
	{
	    $user_id = Auth::user();
	    $comment = Comment::where('user_id', $id)->where('user_id',$user_id)-get();
	    $comment->delete();
}

}
