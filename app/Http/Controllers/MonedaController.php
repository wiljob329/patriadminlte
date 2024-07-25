<?php

namespace App\Http\Controllers;

use App\Models\Moneda;

class MonedaController extends Controller
{
    //
    public function index()
    {
        $monedas = Moneda::all();

        return response()->json($monedas);
    }
}
