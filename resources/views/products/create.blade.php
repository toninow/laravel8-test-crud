@extends('layouts.master')
@section('content')
<h1>CREAR UN PRODUCTO</h1>
<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <label for="">Titulo</label>
        <input class="form-control" type="text" name="title">
    </div>
    <div class="form-row">
        <label for="">Descripcion</label>
        <input class="form-control" type="text" name="description">
    </div>
    <div class="form-row">
        <label for="">Precio</label>
        <input class="form-control" type="number" min="1.00" step="0.01" name="price">
    </div>

    <div class="form-row">
        <label for="">Stock</label>
        <input class="form-control" type="number" min="0" name="stock">
    </div>
    <div class="form-row">
        <label for="">Estado</label>
        <select class="custom-select" name="status">
            <option value="">Por favor seleccione</option>
            <option value="Disponible"> Disponible</option>
            <option value="No Disponible">No Disponible</option>
        </select>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary btn-lg">CREAR PRODUCTO</button>
    </div>
</form>



@endsection
