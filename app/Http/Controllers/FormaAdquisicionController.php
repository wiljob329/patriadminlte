<?php

namespace App\Http\Controllers;

use App\Models\FormaAdquisicion;
use Illuminate\Http\Request;

class FormaAdquisicionController extends Controller
{
    public function index(Request $request)
    {
        $adquisiciones = FormaAdquisicion::all();

        return response()->json($adquisiciones);

    }
    //
}
