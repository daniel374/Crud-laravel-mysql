@extends("layouts.master")

@section("title", "Inserción de productos")

@section("header", "Inserción de productos")

@section("content")
    @isset($product)
    <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST">
        @method("PUT")
        @else
            <form action="{{ route('products.store') }}" method="POST">
                @endisset
                @csrf
                Nombre del producto:<input type="text" name="name" value="{{$product->name ?? '' }}"><br>
                Descripción:<input type="text" name="description" value="{{$product->description ?? '' }}"><br>
                Precio:<input type="text" name="price" value="{{$product->price ?? '' }}"><br>
                <input type="submit">
            </form>
    @endsection
