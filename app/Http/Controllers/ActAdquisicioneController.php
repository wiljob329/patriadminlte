<?php

namespace App\Http\Controllers;

use App\Models\ActAdquisicione;
use Illuminate\Http\Request;

class ActAdquisicioneController extends Controller
{
    public function index(Request $request)
    {
        $adquisiciones = ActAdquisicione::all();

        return response()->json($adquisiciones);

    }
    //
}
