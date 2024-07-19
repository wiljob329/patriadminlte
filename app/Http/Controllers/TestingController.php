<?php

namespace App\Http\Controllers;

use App\Models\CategoriaEspecifica;
use App\Models\Responsable;

class TestingController extends Controller
{
    //

    public function index()
    {

        $categoriaEspecial = CategoriaEspecifica::with(['subcategoria.categoriaGeneral'])->find(1);

        // $responsable = Responsable::find(1);
        // $responsable->division->gerencia;
        // $responsable->cargo;

        // return dd($categoriaEspecial);
        return response()->json($categoriaEspecial);
    }
}
