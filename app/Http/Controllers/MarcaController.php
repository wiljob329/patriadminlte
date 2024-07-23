<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MarcaController extends Controller
{
    public function index(Request $request)
    {
        $marcas = Marca::query();

        return DataTables::of($marcas)
            ->addIndexColumn()
            ->make(true);
    }

    public function store(Request $request)
    {

        $request->validate([
            // 'nombre' => ['required', ActMarca::unique()],
            'marca' => 'required|unique:marcas',
        ]);

        $marca = new Marca();

        $marca->marca = $request->marca;

        $marca->save();

        // return dd($request);
        return redirect()->route('activos.create');

    }
}
