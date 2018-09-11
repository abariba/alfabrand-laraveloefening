@extends('layouts.master')

@section('content')
    @foreach($products as $product)
    {{$product->product_id}}
    <div>
        title:{{$product->product_id}}<br>
    </div>
@endsection