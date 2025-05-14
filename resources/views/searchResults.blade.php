@extends('layout')

@section('page_content')
    @foreach($allProducts as $product)
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->price }}&euro;</p>
        <p>In stock: {{ $product->stock }}</p>
        <a href="{{ route('products.singleProduct', ['productId' => $product->id]) }}">View product</a>
    @endforeach
@endsection

