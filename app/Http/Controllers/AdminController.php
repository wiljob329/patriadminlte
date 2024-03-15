<?php

namespace App\Http\Controllers;

use App\Models\Activo;

class AdminController extends Controller
{
    //
    public function index()
    {
        $activos = Activo::count();

        return view('admin.index', ['activos' => $activos]);
    }
}
