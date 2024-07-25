<?php

namespace App\Http\Controllers;

use App\Models\TipoActivo;
use Illuminate\Http\Request;

class TipoActivoController extends Controller
{
    public function index(Request $request)
    {

        $tipos = TipoActivo::all();

        return response()->json($tipos);
    }
}
