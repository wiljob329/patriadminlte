<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
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

        $color = Color::all();
        // $color->activo;

        return response()->json($color);
    }
}
