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


	public function getDeleteComment($commentid)
	{
			$comment = Comment::where('id', $commentid)->first();
			if (Auth::user() != $comment->user) {
					return redirect()->back();
			}
			$comment->delete();
			return redirect()->route('dashboard')->with(['message' => 'Successfully deleted!']);
	}
	public function postEditComment(Request $request)
	{
			$this->validate($request, [
					'body' => 'required'
			]);
			$comment = Comment::find($request['commentid']);
			if (Auth::user() != $comment->user) {
					return redirect()->back();
			}
			$comment->body = $request['body'];
			$comment->update();
			return response()->json(['new_body' => $comment->body], 200);
	}
	public function postLikeComment(Request $request)
	{
			$commentid = $request['commentid'];
			$is_like = $request['isLike'] === 'true';
			$update = false;
			$comment = Comment::find($commentid);
			if (!$comment) {
					return null;
			}
			$user = Auth::user();
			$like = $user->likes()->where('commentid', $commentid)->first();
			if ($like) {
					$already_like = $like->like;
					$update = true;
					if ($already_like == $is_like) {
							$like->delete();
							return null;
					}
			} else {
					$like = new Like();
			}
			$like->like = $is_like;
			$like->userid = $user->id;
			$like->commentid = $comment->id;
			if ($update) {
					$like->update();
			} else {
					$like->save();
			}
			return null;
	}

}
