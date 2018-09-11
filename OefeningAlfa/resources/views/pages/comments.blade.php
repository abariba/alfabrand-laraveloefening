@extends('layouts.master')

		@foreach($comments as $comment)
		<a href="plants={{$comment->id}}"><h2 class="featurette-heading">{{$comment->title}}</h2></a>
		<p class="cameleon">
		comment:{{$comment->body}}
		</p>
        @endforeach



@section('content')

<div class="form-group">
  <label for="comment"></label>
  <input type="comment" class="form-control" id="comment" name="comment">
</div>


<div class="button">


  <button type="submit" class="btn btn-primary"></button>
</div>

@endsection
