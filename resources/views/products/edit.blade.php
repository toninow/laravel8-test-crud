@extends('layouts.master')
@section('content')
<h1>CREAR UN PRODUCTO</h1>
<form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-row">
        <label for="">Titulo</label>
        <input class="form-control" type="text" name="title" value={{ $product->title }} required>
    </div>
    <div class="form-row">
        <label for="">Descripcion</label>
        <input class="form-control" type="text" name="description" value={{ $product->description }} required>
    </div>
    <div class="form-row">
        <label for="">Precio</label>
        <input class="form-control" type="number" min="1.00" step="0.01" name="price" value={{ $product->price }} required>
    </div>

    <div class="form-row">
        <label for="">Stock</label>
        <input class="form-control" type="number" min="0" name="stock" value={{ $product->stock }} required>
    </div>
    <div class="form-row">
        <label for="">Estado</label>
        <select class="custom-select" name="status" required>
            <option {{ $product->status == 'Disponible' ? 'selected' : '' }} value="Disponible"> Disponible</option>
            <option {{ $product->status == 'No Disponible' ? 'selected' : '' }} value="No Disponible">No Disponible</option>
        </select>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary btn-lg">EDITAR PRODUCTO</button>
    </div>
</form>



@endsection
