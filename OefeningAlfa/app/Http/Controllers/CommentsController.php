<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\comments;
use Auth;

class CommentsController extends Controller
{
	public function comment(){
		$comments = comments::get();
		// dd($comment);
		return view('pages.comments',compact('comments'));
	}



		public function store(Comments $comments)
	{
		$comment = new Comments;
		$comment->body = request('body');
		$comment->product_id = request('product_id');
		$comment->title = request('title');
		$comment->user_id = Auth::user()->id;


		$comment->save();
	}


	public function destroy($id)
	{
	    $user_id = Auth::user();
	    $comment = Comments::where('user_id', $id)->where('user_id',$user_id)-get();
	    $comment->delete();
}

}
