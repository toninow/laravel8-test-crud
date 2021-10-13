@extends('layouts.master')
@section('content')
    <h1>Lista de Productos</h1>
    @empty ($products)
    <div class="aler alert-warning">
        Lista de Productos Vacia
    </div>
    @else
    <div class="table-responsibe">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $products as $product )
                <tr>
                    <td>{{ $product ->id }}</td>
                    <td>{{ $product ->title }}</td>
                    <td>{{ $product ->description }}</td>
                    <td>{{ $product ->price }}</td>
                    <td>{{ $product ->stock }}</td>
                    <td>{{ $product ->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endempty
@endsection
