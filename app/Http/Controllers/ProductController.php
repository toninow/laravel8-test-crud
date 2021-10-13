<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        dd($products);

        return view ('products.index');
    }

    public function store()
    {

    }

    public function show($product)
    {

        $product = DB::table('products')->where('id', $product)->first();
        dd($product);

        return view ('products.show');
    }

    public function edit($product)
    {
        return "EDITANDO PRODUCTO CON ID {$product}";
    }

    public function update($product)
    {
        //
    }

    public function destroy($product)
    {
        //
    }
}
