<?php

namespace App\Http\Controllers;

use App\Models\ActCondicion;
use Illuminate\Http\Request;

class ActCondicionController extends Controller
{
    public function index(Request $request)
    {
        /** $condiciones = ActCondicion::all();$condicion = $condiciones->map(function ($condicion) {
         * return [
         * 'condicion' => $condiciones->toArray(),'activos' => $condiciones->activo,
         *];
        }); 
         *return response()->json($condicionessConActivos); */

        $condicion = ActCondicion::find(60);
        $condicion->activo;
        return response()->json($condicion);
    }
}
