<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\Responsable;

class AdminController extends Controller
{
    //
    public function index()
    {
        $activos = Activo::count();
        $responsable = Responsable::count();

        return view('admin.index', ['activos' => $activos, 'responsable' => $responsable]);
    }
}
