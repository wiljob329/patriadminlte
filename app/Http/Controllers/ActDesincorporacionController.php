<?php

namespace App\Http\Controllers;

use App\Models\ActDesincorporacion;
use Illuminate\Http\Request;

class ActDesincorporacionController extends Controller
{
    public function index(Request $request)
    {
        $color = ActDesincorporacion::find(0);
        $color->activo;

        return response()->json($color);
    }
}
