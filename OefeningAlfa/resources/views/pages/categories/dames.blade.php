@extends('layouts.master')
@section('content')
<div class="bannershop">
  <h1>INSERT KOEWLE BANNER HIER</h1>
</div>

    <div class="wrapper">
			{{-- <div class="row">
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
			</div> --}}
			<div class="row">
			@foreach($products as $row)
					<figure class="card card-product">
						<div class="img-wrap"><img src="{{$row['img']}}" alt="Product Image"></div>
						<figcaption class="info-wrap">
								<a href="dames={{$row['id']}}"><h4 class="title">{{$row['name']}}</h4></a>
								<!-- <p class="desc">{{$row['body']}}</p> --> <!--body moet anders (tegroot) -->
						</figcaption>
						<div class="bottom-wrap">
							<div class="price-wrap h5">
								<span class="price-new price">€{{$row['price']}}</span> <!--<del class="price-old">$1980</del>-->
							</div> <!-- price-wrap.// -->
						</div> <!-- bottom-wrap.// -->
					</figure>
				@endforeach
			</div>
	</div>
@endsection
