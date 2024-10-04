<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UbicacionController extends Controller
{
    //
    public function index(Request $request)
    {

        $ubicaciones = Ubicacion::query()->with('sede');

        return DataTables::of($ubicaciones)
            ->addIndexColumn()
            ->make(true);
    }
}
