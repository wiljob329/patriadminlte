<?php

namespace App\Http\Controllers;

use App\Models\ActTipo;
use Illuminate\Http\Request;

class ActTipoController extends Controller
{
    public function index(Request $request)
    {
        $tipos = ActTipo::all();
        // $tipos->activo;
        return response()->json($tipos);
    }
}
