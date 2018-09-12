@extends('layouts.master')





@section('content')
<div class="col-sm-8 blog-main">
<h1>meem Review</h1>

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
@foreach($comments as $comment)
<div class="group-title">

{{$comment->title}}

</div>

{{$comment->user['name']}} | {{$comment->created_at}}<br>

{{$comment->body}}<hr>
</p>
		@endforeach

@endsection
