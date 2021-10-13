@extends('layouts.app')
@section('content')
<div align="center">
    <h1>EDITAR PRODUCTO</h1>
</div>
<form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-row m-4">
        <label for="">Titulo</label>
        <input class="form-control" type="text" name="title" value={{ old('title') ?? $product->title }}>
    </div>
    <div class="form-row m-4">
        <label for="">Descripcion</label>
        <input class="form-control" type="text" name="description" value={{ old('description') ?? $product->description }} >
    </div>
    <div class="form-row m-4">
        <label for="">Precio</label>
        <input class="form-control" type="number" min="1.00" step="0.01" name="price" value={{old('price') ?? $product->price }}>
    </div>

    <div class="form-row m-4">
        <label for="">Stock</label>
        <input class="form-control" type="number" min="0" name="stock" value={{ old('stock') ?? $product->stock }}>
    </div>
    <div class="form-row m-4">
        <label for="">Estado</label>
        <select class="custom-select" name="status">
            <option {{ old('status') == 'available' ? 'selected' : ($product->status == 'available' ? 'selected' : '') }} value="available"> Disponible</option>
            <option {{ old('status') == 'unavailable' ? 'selected' : ($product->status == 'unavailable' ? 'selected' : '') }} value="unavailable">No Disponible</option>
        </select>
    </div>
    <div class="form-row mt-3 m-4">
        <button type="submit" class="btn btn-success btn-lg">EDITAR PRODUCTO</button>
        <a class="btn btn-info text-white ml-3" href="{{ route('products.index') }}">VOLVER</a>
    </div>
</form>



@endsection
