<?php

namespace App\Http\Controllers;

use App\Models\CategoriaEspecifica;
use App\Models\Responsable;

class TestingController extends Controller
{
    //

    public function index()
    {

        $categoriaEspecial = CategoriaEspecifica::find(1);
        $categoriaEspecial->subCategoria->categoriaGeneral;

        $responsable = Responsable::find(1);
        $responsable->division->gerencia;
        $responsable->cargo;

        // return dd($categoriaEspecial);
        return response()->json($responsable);
    }
}
