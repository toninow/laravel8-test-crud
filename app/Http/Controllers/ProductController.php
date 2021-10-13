<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {

        return view('products.index')->with([
            'products' => Product::all(),
        ]);

    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $product = Product::Create(request()->all());
        return redirect();
    }

    public function show($product)
    {
        $product = Product::findOrFail($product);
        return view('products.show')->with([
            'product' => $product,
        ]);
    }

    public function edit($product)
    {
        return view('products.edit')->with([
            'product' => Product::findOrFail($product),
        ]);
    }

    public function update($product)
    {
        $product = Product::findOrFail($product);
        $product->update(request()->all());
        return $product;
    }

    public function destroy($product)
    {
        $product = Product::findOrFail($product);
        $product->delete();
        return $product;
    }
}
