@extends('layouts.master')





@section('content')
<div class="col-sm-8 blog-main">
<h1>Review Products</h1>

<hr>

    <form method="POST" action="/comments">
    {{ csrf_field() }}

<div class="comment-wrapper">
<!--
<div class="star-wrapper">

    <div class="stars">

      <form action="">

        <input class="star star-5" id="star-5" type="radio" name="star"/>

        <label class="star star-5" for="star-5"></label>

        <input class="star star-4" id="star-4" type="radio" name="star"/>

        <label class="star star-4" for="star-4"></label>

        <input class="star star-3" id="star-3" type="radio" name="star"/>

        <label class="star star-3" for="star-3"></label>

        <input class="star star-2" id="star-2" type="radio" name="star"/>

        <label class="star star-2" for="star-2"></label>

        <input class="star star-1" id="star-1" type="radio" name="star"/>

        <label class="star star-1" for="star-1"></label>



    </div>

  </div> -->


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

</form>
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
