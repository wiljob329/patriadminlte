<?php

namespace App\Http\Controllers;

use App\Models\CategoriaEspecifica;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoriaEspecificaController extends Controller
{
    //

    public function index(Request $request)
    {
        $categoriaEspecifica = CategoriaEspecifica::query()->with('subCategoria.categoriaGeneral');

        return DataTables::of($categoriaEspecifica)
            ->addIndexColumn()
            ->make(true);
    }
}
