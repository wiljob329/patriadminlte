@extends('adminlte::page')

@section('title', 'Sistema Patrimonio')

@section('content_header')
@stop

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <x-adminlte-card title="Activos Aguas de Mérida" theme="dark" class="mt-4 elevation-3" id="card-datatable">
                <x-slot name="toolsSlot">
                    <a href="{{ route('activos.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Agregar
                        Activo</a>
                </x-slot>
                <table class="table yajra-datatable table-bordered" style="padding-top:10px;">
                    <thead class="">
                        <tr>
                            <th>Codigo</th>
                            <th>Modelo</th>
                            <th>Descripcion</th>
                            <th>Estado</th>
                            <th>Fecha Adquisicion</th>
                            <th>Acciones</th>
                            <th>Serial</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </x-adminlte-card>
        </div>
    </div>
    {{-- Modal para editar el activo --}}
    <x-adminlte-modal id="modalEdit" title="Editar Activo" size="lg" theme="light" icon="fa fa-lg fa-fw fa-pen"
        v-centered static-backdrop>
        <x-form.activo-form id="activo_editar" editar />
    </x-adminlte-modal>
    <x-adminlte-modal id="modalShow" title="Mostrar Activo" size="lg" theme="light" icon="fa fa-lg fa-fw fa-eye"
        v-centered static-backdrop>
        <x-form.activo-form id="activo_show" show />
    </x-adminlte-modal>
@stop

@section('css')
    <link rel="stylesheet" href={{ asset('css/datatables.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/buttons.bootstrap4.css') }}>
@stop

@section('js')
    <script src={{ asset('js/datatables.min.js') }}></script>
    <script src={{ asset('js/dataTables.buttons.js') }}></script>
    <script src={{ asset('js/buttons.bootstrap4.js') }}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.colVis.min.js"></script>
@stop
