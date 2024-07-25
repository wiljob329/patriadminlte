<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use Yajra\DataTables\Facades\DataTables;

class ResponsableActivoController extends Controller
{
    //
    public function index()
    {
        $responsable = Responsable::query();

        return DataTables::of($responsable)
            ->addIndexColumn()
            ->addColumn('cargo', function ($row) {
                $est = $row->cargo;

                return $est->cargo;
            })
            ->addColumn('division', function ($row) {
                $est = $row->division;

                return $est->division;
            })
            ->addColumn('gerencia', function ($row) {
                $est = $row->division->gerencia;

                return $est->gerencia;
            })
            ->make(true);
    }
}
