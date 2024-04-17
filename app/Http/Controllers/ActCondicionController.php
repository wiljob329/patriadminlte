<?php

namespace App\Http\Controllers;

use App\Models\ActCondicion;
use Illuminate\Http\Request;

class ActCondicionController extends Controller
{
    public function index(Request $request)
    {
        $condicion = ActCondicion::all();
        // $condicion->activo;
        return response()->json($condicion);
    }
}
