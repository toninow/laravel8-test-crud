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
        $rules = [
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:1000'],
            'price' => ['required', 'min:1'],
            'stock' => ['required', 'min:0'],
            'status' => ['required', 'in: Disponible, No Disponible'],
        ];

        request()->validate($rules);

        if (request()-> status == 'Disponible' && request()->stock == 0){
            session()->flash('error', 'Si esta disponible debe tener stock');
            return redirect()->back();
        }

        $product = Product::Create(request()->all());
        return redirect()->route('products.index');
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
        $rules = [
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:1000'],
            'price' => ['required', 'min:1'],
            'stock' => ['required', 'min:0'],
            'status' => ['required', 'in: Disponible, No Disponible'],
        ];

        request()->validate($rules);

        if (request()-> status == 'Disponible' && request()->stock == 0){
            session()->flash('error', 'Si esta disponible debe tener stock');
            return redirect()->back();
        }

        $product = Product::findOrFail($product);
        $product->update(request()->all());
        return redirect()->route('products.index');
    }

    public function destroy($product)
    {
        $product = Product::findOrFail($product);
        $product->delete();
        return redirect()->route('products.index');
    }
}
