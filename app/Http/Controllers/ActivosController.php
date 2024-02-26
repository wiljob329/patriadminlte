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
        if($request->ajax()){
            $data = DB::table('activos')->latest()->get();
            return DataTables::of($data)
                // ->setRowId('codigo')
                ->addIndexColumn()
                ->addColumn('acciones',function($row){
                    
                    $btn = '<nobr>';
                    /*$showButton = '<form class="d-inline" action="/activos/'.$row->codigo.' method="GET" ><button type="submit" class="btn btn-xs btn-default text-primary mx-1 shadow" data-toggle="modal" data-target="#modalEdit" title="Edit">
                    <i class="fa fa-lg fa-fw fa-pen"></i></button></form>';*/
                    
                    //$editButton = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" id="row-data" data-toggle="modal" data-target="#modalEdit" data-row="'.json_encode($row).'" title="Edit">
                    //<i class="fa fa-lg fa-fw fa-pen"></i></button>';
                    $editButton = '<a href="javascript:void(0)" id="showActivo"  data-url="'. route('activos.show', array($row->codigo)).'"  class="btn btn-xs btn-default text-primary mx-1 shadow"><i class="fa fa-lg fa-fw fa-pen"></i></a>';
                    $btn .= $editButton.'</nobr>';
                    $acciones = '<nobr><button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                    <i class="fa fa-lg fa-fw fa-trash"></i>
                  </button><button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </button> </nobr>';
                    return $btn;
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
    public function show($codigo)
    {
        $activo = Activo::findOrFail($codigo);
        //return redirect()->route('dashboard', compact('activo'));
        return response()->json($activo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codigo)
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
