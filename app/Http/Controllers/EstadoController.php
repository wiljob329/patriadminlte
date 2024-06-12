<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    //
    public function index(Request $request)
    {

        $estados = Estado::all();

        return response()->json($estados);

    }
}
