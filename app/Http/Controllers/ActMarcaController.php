<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\ActMarca;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ActMarcaController extends Controller
{
    public function index(Request $request)
    {
        $marca = ActMarca::all();
        // $marca->activo;

        return response()->json($marca);
    }
}
