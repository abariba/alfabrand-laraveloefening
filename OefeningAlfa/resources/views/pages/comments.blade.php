@extends('layouts.master')

@foreach($comments as $comment)
<p>{{$comment->body}}</p>
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
