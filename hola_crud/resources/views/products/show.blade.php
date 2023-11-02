@extends("layouts.master")

@section("title", "Administración de productos")

@section("header", "Administración de productos")

@section("content")
    <a href="{{ route('products.create') }}">Nuevo</a>
    <table border='1'>
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->price}}</td>
            <td>
                <a href="{{route('products.edit', $data->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('products.destroy', $data->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
            </td>
            <br>
    </table>
@endsection
