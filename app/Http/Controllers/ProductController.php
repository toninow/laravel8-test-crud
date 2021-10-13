<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return 'LISTA DE PRODUCTOS DESDE EL CONTROLADOR';
    }

    public function store()
    {

    }

    public function show($product)
    {
        return "MOSTRANDO PRODUCTO CON ID {$product}";
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
