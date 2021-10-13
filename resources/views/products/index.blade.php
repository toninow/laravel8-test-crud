@extends('layouts.app')
@section('content')
    <div align="center">
        <h1>Productos Disponibles</h1>
    </div>
    <div class="row m-5">
        @foreach ($products as $product)
        <div class="col-sm-4">
            <div class="card m-4">
                <div class="card-body">
                    <h3 class="card-title">{{ $product ->id }} - {{ $product ->title }}</h3>
                    <p class="card-text">{{ $product ->description }}</p>
                    <div style="width: 44%; float:left">
                        Precio: {{ $product ->price }}
                    </div>
                    <div style="width: 50%; float:right">
                        Stock: {{ $product ->stock }}
                    </div>
                    <h5 class="mt-5">Estado: {{ $product ->status }}</h5>
                    <a class="btn btn-success" href="{{ route('products.show', ['product' => $product->id]) }}">Visualizar</a>
                    <a class="btn btn-warning" href="{{ route('products.edit', ['product' => $product->id]) }}">Editar</a>

                    <form method="POST" class="d-inline" action="{{ route('products.destroy', ['product' => $product->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">eliminar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
