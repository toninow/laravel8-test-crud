@extends('layouts.app')
@section('content')
<h1>CREAR UN PRODUCTO</h1>
<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <label for="">Titulo</label>
        <input class="form-control" type="text" name="title" value="{{ old('title') }}">
    </div>
    <div class="form-row">
        <label for="">Descripcion</label>
        <input class="form-control" type="text" name="description" value="{{ old('description') }}">
    </div>
    <div class="form-row">
        <label for="">Precio</label>
        <input class="form-control" type="number" min="1.00" step="0.01" name="price" value="{{ old('price') }}">
    </div>

    <div class="form-row">
        <label for="">Stock</label>
        <input class="form-control" type="number" min="0" name="stock" value="{{ old('stock') }}">
    </div>
    <div class="form-row">
        <label for="">Estado</label>
        <select class="custom-select" name="status">
            <option value="" selected>Por favor seleccione</option>
            <option {{ old('status') == 'available' ? 'selected' : '' }} value="available"> Disponible</option>
            <option {{ old('status') == 'unavailable' ? 'selected' : '' }} value="unavailable" >No Disponible</option>
        </select>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary btn-lg">CREAR PRODUCTO</button>
    </div>
</form>



@endsection
