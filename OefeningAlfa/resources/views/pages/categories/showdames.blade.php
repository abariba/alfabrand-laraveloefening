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

											<form method="POST" action="/dames">
												    {{ csrf_field() }}
 												    <input type="hidden" name="product_id" value={{$product->id}}>
												   

												<a><button type="submit" name='dislike' class="btn btn-primary pull-right">Buy</button></a>
											</form>


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




											<form method="POST" action="/damesl">
												    {{ csrf_field() }}
 												    <input type="hidden" name="product_id" value={{$product->id}}>
												    <input type="hidden" name="comment_id" value={{$comment->id}}>

												<a><button type="submit" name='dislike' class="btn btn-success pull-right">Like</button></a>
											</form>
											<form method="POST" action="/damesd">

																							    {{ csrf_field() }}
 												    <input type="hidden" name="product_id" value={{$product->id}}>
												    <input type="hidden" name="comment_id" value={{$comment->id}}>
												<a><button type="submit" name='like' class="btn btn-danger pull-right">Dislike</button></a>
											
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