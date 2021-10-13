@extends('layouts.master')
@section('content')
    <h1>Lista de Productos</h1>

    <a class="btn btn-success" href="{{ route('products.create') }}">CREAR PRODUCTO</a>

    @empty ($products)
    <div class="aler alert-warning">
        LISTA DE PRODUCTOS VACIA
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
                    <th>Acciones</th>
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
                    <td>
                        <a class="btn btn-link" href="{{ route('products.show', ['product' => $product->id]) }}">mostrar</a>
                        <a class="btn btn-link" href="{{ route('products.edit', ['product' => $product->id]) }}">editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endempty
@endsection
