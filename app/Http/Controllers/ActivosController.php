<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivoRequest;
use App\Models\Activo;
use App\Models\Color;
use App\Models\CondicionFisica;
use App\Models\EstadoActivo;
use App\Models\FormaAdquisicion;
use Illuminate\Http\Request;
//use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class ActivosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Activo::query()->with(
                'categoriaEspecifica.subCategoria.categoriaGeneral',
                'color',
                'condicionFisica',
                'estadoActivo',
                'formaAdquisicion',
                'marca',
                'responsable',
                'sede',
                'tipoActivo',
                'ubicacion',
                'unidadAdministrativa',
            );

            return DataTables::of($data)
                ->setRowId('id')
                ->addIndexColumn()
                ->addColumn('estado', function ($row) {
                    $est = $row->estadoActivo;

                    return $est->estado;
                })
                ->addColumn('acciones', function ($row) {

                    $btn = '<nobr>';
                    $deleteButton = '<form class="d-inline" action="/activos/'.$row->id.'" method="POST" > <input type="hidden" name="_token" value='.csrf_token().'>
                    <input type="hidden" name="_method" value="delete">
                    <button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Borrar">
                    <i class="fa fa-lg fa-fw fa-trash"></i></button></form>';

                    $editButton = '<a href="javascript:void(0)" id="editActivo"  data-url="'.route('activos.show', [$row->id]).'"  class="btn btn-xs btn-default text-primary mx-1 shadow"><i class="fa fa-lg fa-fw fa-pen"></i></a>';
                    $btn .= $editButton;
                    $btn .= $deleteButton;
                    // $showButton = '<a href="javascript:void(0)" id="showActivo"  data-url="'.route('activos.show', [$row->id]).'"  class="btn btn-xs btn-default text-warning mx-1 shadow"><i class="fa fa-lg fa-fw fa-eye"></i></a>';
                    // $btn .= $showButton.'</nobr>';

                    return $btn;
                })
                ->rawColumns(['estado', 'acciones'])
                ->make(true);

            // return dd(DataTables::of($data)->toJson());
        }

        return view('activos.activos', []);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $estados = EstadoActivo::all();
        $condiciones = CondicionFisica::all();
        $adquisiciones = FormaAdquisicion::all();
        $colores = Color::all();

        return view('activos.activos-add', compact('estados', 'condiciones', 'adquisiciones', 'colores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ActivoRequest $request)
    {
        //
        return dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show($codigo)
    {
        $activo = Activo::find($codigo);
        $activo->actadquisicione;
        $activo->act_tipo;
        $activo->act_condicion;
        $activo->act_color;
        $activo->act_marca;
        $activo->estado;

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

        // try {
        //     $activoAEliminar = Activo::findOrFail($codigo);
        //     $activoAEliminar->delete();
        //     Alert::error('Exito!', 'Activo eliminado con exito');
        //     return redirect()->route('dashboard');
        // }catch(Exception $ex){
        //     Alert::warning('Error','No se pudo eliminar el activo');
        //     return redirect()->route('dashboard');
        // }

        // $activoEliminar = Activo::findOrFail($codigo);
        // return $activoEliminar;
    }
}
