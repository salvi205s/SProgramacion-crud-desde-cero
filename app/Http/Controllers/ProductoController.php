<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    function index()
    {
        $Productos = Producto::get();
        return view('productos.index', ['productos' => $Productos]);
    }

    function destroy(Producto $producto)
    {
        $producto->delete();
        return back();
    }
}
