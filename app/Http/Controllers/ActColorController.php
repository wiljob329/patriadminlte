<?php

namespace App\Http\Controllers;

use App\Models\ActColor;
use Illuminate\Http\Request;

class ActColorController extends Controller
{
    public function index(Request $request)
    {
        /**$marca = ActColor::all();
        $marcasConActivos = $marca->map(function ($marca) {
            return [
                'color' => $marca->toArray(),
                'activos' => $marca->activo,
            ];
        });
        return response()->json($marcasConActivos); */



        $color = ActColor::find(5);
        $color->activo;

        return response()->json($color);
    }
}
