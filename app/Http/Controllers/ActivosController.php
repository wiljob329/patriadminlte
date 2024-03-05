<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivoRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Activo;
use Exception;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
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
                    $deleteButton = '<form class="d-inline" action="/activos/'.$row->codigo.'" method="POST" >
                    <input type="hidden" name="_token" value='.csrf_token().'>
                    <input type="hidden" name="_method" value="delete">
                    <button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Borrar">
                    <i class="fa fa-lg fa-fw fa-trash"></i></button></form>';
                    
                    $editButton = '<a href="javascript:void(0)" id="editActivo"  data-url="'. route('activos.show', array($row->codigo)).'"  class="btn btn-xs btn-default text-primary mx-1 shadow"><i class="fa fa-lg fa-fw fa-pen"></i></a>';
                    $btn .= $editButton;
                    $btn .= $deleteButton;
                    $showButton = '<a href="javascript:void(0)" id="showActivo"  data-url="'. route('activos.show', array($row->codigo)).'"  class="btn btn-xs btn-default text-warning mx-1 shadow"><i class="fa fa-lg fa-fw fa-eye"></i></a>';
                    $btn .= $showButton.'</nobr>';
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
        return view("activos.activos-add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ActivoRequest $request)
    {
        //
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show($codigo)
    {
        $activo = Activo::findOrFail($codigo);
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
    public function destroy($codigo)
    {
        
        try {
            $activoAEliminar = Activo::findOrFail($codigo);
            $activoAEliminar->delete();
            Alert::error('Exito!', 'Activo eliminado con exito');
            return redirect()->route('dashboard');
        }catch(Exception $ex){
            Alert::warning('Error','No se pudo eliminar el activo');
            return redirect()->route('dashboard');
        }
        
        // $activoEliminar = Activo::findOrFail($codigo);
        // return $activoEliminar;
    }
}
