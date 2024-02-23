<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Activo;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ActivosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //$model = Activo::query();
            //$data = DB::table('activos')->latest()->get();
        //return DataTables::of($model)->toJson();
        //
        if($request->ajax()){
            $data = DB::table('activos')->latest()->get();
            return DataTables::of($data)
                ->setRowId('codigo')
                ->addColumn('acciones',function($row){
                    $acciones = '<nobr><button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                    <i class="fa fa-lg fa-fw fa-pen"></i>
                </button><button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                    <i class="fa fa-lg fa-fw fa-trash"></i>
                  </button><button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </button> </nobr>';
                    return $acciones;
                })
                ->rawColumns(['acciones'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Activo $activo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activo $activo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activo $activo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activo $activo)
    {
        //
    }
}
