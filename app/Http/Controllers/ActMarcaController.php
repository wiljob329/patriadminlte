<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\ActMarca;
use Illuminate\Http\Request;

class ActMarcaController extends Controller
{
    public function index(Request $request)
    {
        /** $marca = ActMarca::all();$marcasConActivos = $marca->map(function ($marca) {
         * return [
         * 'marca' => $marca->toArray(),'activos' => $marca->activo,
         *];
        }); 
         *return response()->json($marcasConActivos); */

        $marca = ActMarca::find(5);
        $marca->activo;

        return response()->json($marca);
    }
}
