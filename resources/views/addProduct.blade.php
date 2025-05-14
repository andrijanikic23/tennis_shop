@extends('layout')

@section('page_content')
    <form method="POST" action="{{ route('products.added') }}">
        {{ csrf_field() }}
        <input name="name" type="text" placeholder = "Enter the name of product">
        <br>
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
        <input name="description" type="text" placeholder="Enter the description of product">
        <br>
        <input name="price" type="number" step="0.01" placeholder="Enter the price of product">
        <br>
        <input name="stock" type="number" placeholder="Enter the stock of product">
        <br>
        <input name="image_path" type="text" placeholder="Enter image path of product">
        <br>
        <button>Save product</button>
    </form>

@endsection
