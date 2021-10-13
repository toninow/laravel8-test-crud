<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view ('products.index');
    }

    public function store()
    {

    }

    public function show($product)
    {
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
