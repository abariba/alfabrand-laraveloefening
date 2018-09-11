<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\comments;

class CommentsController extends Controller
{
	public function comment(){
		$comments = comments::all();
		//$comments = "hoi";
		//dd($comments);
		return view('pages.comments',compact('comments'));
	}
	
}
