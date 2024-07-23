<?php

namespace App\Http\Controllers;

use App\Models\CondicionFisica;
use Illuminate\Http\Request;

class CondicionFisicaController extends Controller
{
    public function index(Request $request)
    {
        $condicion = CondicionFisica::all();

        // $condicion->activo;
        return response()->json($condicion);
    }
}
