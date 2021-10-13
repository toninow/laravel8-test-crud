@extends('layouts.master')
@section('content')
<h1>CREAR UN PRODUCTO</h1>
<form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-row">
        <label for="">Titulo</label>
        <input class="form-control" type="text" name="title" value={{ old('title') ?? $product->title }}>
    </div>
    <div class="form-row">
        <label for="">Descripcion</label>
        <input class="form-control" type="text" name="description" value={{ old('description') ?? $product->description }} >
    </div>
    <div class="form-row">
        <label for="">Precio</label>
        <input class="form-control" type="number" min="1.00" step="0.01" name="price" value={{old('price') ?? $product->price }}>
    </div>

    <div class="form-row">
        <label for="">Stock</label>
        <input class="form-control" type="number" min="0" name="stock" value={{ old('stock') ?? $product->stock }}>
    </div>
    <div class="form-row">
        <label for="">Estado</label>
        <select class="custom-select" name="status">
            <option {{ old('status') == 'available' ? 'selected' : ($product->status == 'available' ? 'selected' : '') }} value="available"> Disponible</option>
            <option {{ old('status') == 'unavailable' ? 'selected' : ($product->status == 'unavailable' ? 'selected' : '') }} value="unavailable">No Disponible</option>
        </select>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary btn-lg">EDITAR PRODUCTO</button>
    </div>
</form>



@endsection
