<?php

namespace App\Http\Controllers;

use App\Models\CategoriaEspecifica;

class TestingController extends Controller
{
    //

    public function index()
    {

        $categoriaEspecial = CategoriaEspecifica::find(1);
        $categoriaEspecial->subCategoria->categoriaGeneral;

        // return dd($categoriaEspecial);
        return response()->json($categoriaEspecial);
    }
}
