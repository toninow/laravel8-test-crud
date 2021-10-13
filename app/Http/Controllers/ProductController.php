<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
            'status' => ['required', 'in:available,unavailable'],
        ];

        request()->validate($rules);

        if (request()->status == 'available' && request()->stock == 0)
        {
            return redirect()
                ->back()
                ->withInput(request()->all())
                ->withErrors('Si esta disponible debe tener stock');
        }

        $product = Product::Create(request()->all());
        return redirect()
            ->route('products.index')
            ->withSuccess("El nuevo producto con id {$product->id} y Titulo {$product->title} ha sido creado");
    }

    public function show(Product $product)
    {
        return view('products.show')->with([
            'product' => $product,
        ]);
    }

    public function edit(Product $product)
    {
        return view('products.edit')->with([
            'product' => $product,
        ]);
    }

    public function update(Product $product)
    {
        $rules = [
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:1000'],
            'price' => ['required', 'min:1'],
            'stock' => ['required', 'min:0'],
            'status' => ['required', 'in:available,unavailable'],
        ];

        request()->validate($rules);

        if (request()->status == 'available' && request()->stock == 0)
        {
            session()->flash('error', 'Si esta disponible debe tener stock');
            return redirect()
                ->back()
                ->withInput(request()->all())
                ->withErrors('Si esta disponible debe tener stock');
        }

        $product->update(request()->all());
        return redirect()->route('products.index')
        ->withSuccess("El nuevo producto con id {$product->id} y Titulo {$product->title} ha sido editado");
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()
        ->route('products.index')
        ->withSuccess("El nuevo producto con id {$product->id} y Titulo {$product->title} ha sido eliminado");
    }
}
