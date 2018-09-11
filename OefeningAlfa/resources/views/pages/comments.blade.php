@extends('layouts.master')





@section('content')
<div class="col-sm-8 blog-main">
<h1>Review </h1>

<hr>

    <form method="POST" action="/posts">

    {{ csrf_field() }}

<div class="form-group">
<label for="title"></label>
<input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
</div>

<div class="form-group">
<label for="body"></label>
<textarea id="body" name="body" class="form-control" placeholder="Place a review" required></textarea>
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary">Comment</button>
</div>

<!-- Database data comments -->

<div class="commentsection">

@foreach($comments as $comment)
{{$comment->id}}
<div class="comment-title">

title:{{$comment->title}}<br>

</div>
<span class="comment-naam">

{{ Auth::user()->name }}</span> &nbsp|&nbsp {{$comment->created_at}}<br>
comment:{{$comment->body}}<hr>
</p>
		@endforeach

</div>

@endsection
