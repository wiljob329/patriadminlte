<?php

namespace App\Http\Controllers;

use App\Models\ActTipo;
use Illuminate\Http\Request;

class ActTipoController extends Controller
{
    public function index(Request $request)
    {
        /*
        $tipos = ActTipo::all();
        $tipo = $tipos->map(function ($tipos) {
            return [
                'tipo' => $tipos->toArray(), 'activos' => $tipos->activo,
            ];
        });
        return response()->json($tipo);
        */
        $tipos = ActTipo::find(42);
        $tipos->activo;
        return response()->json($tipos);
    }
}
