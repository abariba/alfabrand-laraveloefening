<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\comments;

class CommentsController extends Controller
{
	public function comment(){
		$comments = comments::get();

		return view('pages.comments',compact('comments'));
	}



		public function store(Comments $comments)
	{
		Comments::create([

		'body' => request('body')

	]);
	}



}
