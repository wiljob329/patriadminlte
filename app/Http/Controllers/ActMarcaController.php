<?php

namespace App\Http\Controllers;

use App\Models\ActMarca;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ActMarcaController extends Controller
{
    public function index(Request $request)
    {
        $marcas = ActMarca::query();

        return DataTables::of($marcas)
            ->addIndexColumn()
            ->make(true);
    }

    public function store(Request $request)
    {

        return dd($request);

    }
}
