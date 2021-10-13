@extends('layouts.app')
@section('content')
    {{-- <h1>{{ $product ->title }} ({{ $product ->id }})</h1>
    <div class="table-responsibe">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>{{ $product ->description }}</td>
                    <td>{{ $product ->price }}</td>
                    <td>{{ $product ->stock }}</td>
                    <td>{{ $product ->status }}</td>
                </tr>
            </tbody>
        </table>
    </div> --}}

    <div class="container bg-faded">
        <div class="row">
            <div class="col-4 mx-auto">
                <div class="card card-body mb-2">
                    <h4 align="center">{{ $product ->id }}</h4>
                    <label>Titulo:</label>
                    <h2>{{ $product ->title }}</h2>
                    <label>Descripción:</label>
                    <p> {{ $product ->description }}</p>
                    <p>Precio: {{ $product ->price }}</p>
                    <p>Stock: {{ $product ->stock }}</p>
                    <h6>Estado: {{ $product ->status }} </h6>
                    <a class="btn btn-info" href="{{ route('products.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
