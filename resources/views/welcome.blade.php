@extends('layout')

@section('page_content')
    <form method="GET" action="{{ route('products.search') }}">
        {{ csrf_field() }}

        <select name="brand">
            <option>Babolat</option>
            <option>Wilson</option>
            <option>Head</option>
            <option>Tecnifibre</option>
            <option>Yonex</option>
        </select>

        <br>

        <select name="category">
            <option>Bag</option>
            <option>Racquet</option>
            <option>Shoes</option>
            <option>Strings</option>
        </select>

        <br>
        <button>Search for products</button>
    </form>
@endsection
