@extends('layouts.master')
@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
		<div class="col- col-md">
			<a href="dames={{$product->id}}"><h1 class="title">{{$product->name}}</h1></a>
		</div>

			{{-- <div class="row">
				<div class="col-md-12">
					<h3>Product Data</h3>
					<table>
						<tr>
							<th>id</th>
							<th>userid</th>
							<th>body</th>
							<th>price</th>
							<th>ammount</th>
							<th>name</th>
							<th>created_at</th>
							<th>updated_at</th>
							<th>category</th>
						</tr>
						@foreach($products as $row)
							<tr>
							<td>{{$row['id']}}</td>
							<td>{{$row['userid']}}</td>
							<td>{{$row['body']}}</td>
							<td>{{$row['price']}}</td>
							<td>{{$row['ammount']}}</td>
							<td>{{$row['name']}}</td>
							<td>{{$row['created_at']}}</td>
							<td>{{$row['updated_at']}}</td>
							<td>{{$row['category']}}</td>
							</tr>
						@endforeach
					</table>
				</div>
			</div> --}}
			<div class="row">
			
			<div class="col-md-12">
					<figure class="card card-product">
						<div class="img-wrap"><img src="{{$product->img}}" alt="Product Image"></div>
						<figcaption class="info-wrap">
								
								<p class="desc">{{$product->body}}</p>
								<div class="rating-wrap">
								</div> <!-- rating-wrap.// -->
						</figcaption>
						<div class="bottom-wrap">
							
							<div class="price-wrap h5">
								<span class="price-new price">€{{$product->price}}</span> <!--<del class="price-old">$1980</del>-->
							</div> <!-- price-wrap.// -->
						</div> <!-- bottom-wrap.// -->
					</figure>
				</div> <!-- col // -->
											<style type="text/css">
											.friends>div{
												display: none;
											}
											.friends:hover>div{
												display: block;
											}
											</style>
									<div class="list-unstyled">
										<ul class="list-unstyled">
										@foreach($product->comment as $comment)
										<hr>
										<li>
											<h4>{{$comment->user['name']}}</h4>
											<strong>
												{{$comment->created_at->diffForHumans()}}
											</strong>
											<p>{{$comment->body}}</p>
											<a class="friends">



											
											@php ($likes_totaal = 0)
											@php ($dislikes_totaal = 0)
											
											@foreach($comment->likes as $like)
												@if($like['like'])
													@php ($likes_totaal += 1)
												@else
													@php ($dislikes_totaal += 1)
												@endif
													
											@endforeach
											<div>
												<a href="/dames={{$product->id}}?{{$comment->id}}"><button type="submit" class="btn btn-success pull-right">Like</button></a>
												<a href="/dames={{$product->id}}?{{$comment->id}}"><button type="submit" class="btn btn-danger pull-right">Dislike</button></a>
											</div>
											
											opinions given of wich {{$likes_totaal}} likes and {{$dislikes_totaal}}  dislikes.
											
											{{count($comment->likes)}}</a>
										</li>


										@endforeach
									</ul>
									</div>




				
			</div>
	</div>
@endsection