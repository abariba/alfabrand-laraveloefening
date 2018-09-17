@extends('layouts.master')
@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
		<div class="col- col-md">
			<h1>Dames</h1>
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
			
			<div class="col-md-4">
					<figure class="card card-product">
						<div class="img-wrap"><img src="..." alt="Product Image"></div>
						<figcaption class="info-wrap">
								<a href="dames={{$product->id}}"><h4 class="title">{{$product->name}}</h4></a>
								<p class="desc">{{$product->body}}</p>
								<div class="rating-wrap">
								</div> <!-- rating-wrap.// -->
						</figcaption>
						<div class="bottom-wrap">
							
							<div class="price-wrap h5">
								<span class="price-new price">€{{$product->price}}</span> <!--<del class="price-old">$1980</del>-->
							</div> <!-- price-wrap.// -->


									<div>
										<ul class="list-group">
										@foreach($product->comment as $comment)
										<hr>
										<li  class="commentcamo">
											<strong>
												{{$comment->created_at->diffForHumans()}}
											</strong>
											{{$comment->body}}
										</li>


										@endforeach
									</ul>
									</div>



						</div> <!-- bottom-wrap.// -->
					</figure>
				</div> <!-- col // -->
				
			</div>
	</div>
@endsection