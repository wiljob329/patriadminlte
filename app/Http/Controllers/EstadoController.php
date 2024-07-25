<?php

namespace App\Http\Controllers;

use App\Models\EstadoActivo;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    //
    public function index(Request $request)
    {

        $estados = EstadoActivo::all();

        return response()->json($estados);

    }
}
