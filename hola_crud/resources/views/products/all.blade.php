@extends("layouts.master")

@section("title", "Administración de productos")

@section("header", "Administración de productos")

@section("content")
    <a href="{{ route('products.create') }}">Nuevo</a>
    <table border='1'>
        @foreach ($productList as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="{{route('products.edit', $product->id)}}">Modificar</a></td>
                <td>
                    <form action = "{{route('products.destroy', $product->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" value="Borrar">
                    </form>
                </td>
                <br>
        @endforeach
    </table>
@endsection
