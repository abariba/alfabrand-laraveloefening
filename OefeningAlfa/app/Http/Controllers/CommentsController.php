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


  public function delete()
{
	if (Auth::user() && (Auth::user()->id == $comment->user_id)) {
	    comment::where('id',$id)->delete();
	    return back();
	}else
	return 'you dont have permission';
}

}
