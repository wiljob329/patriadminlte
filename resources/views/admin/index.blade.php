@extends('adminlte::page')

@section('title', 'Sistema Patrimonio')

@section('content_header')
    <h1>Patrimonio</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <x-adminlte-card title="Activos Aguas de Mérida" theme="dark">
                <table class="table  yajra-datatable" style="padding-top:10px;">
                    <thead class="">
                        <tr>
                            <th>Codigo</th>
                            <th>Modelo</th>
                            <th>Descripcion</th>
                            <th>Estado</th>
                            <th>Fecha Adquisicion</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </x-adminlte-card>
        </div>
    </div>
{{-- Modal para editar el activo --}}
<x-adminlte-modal id="modalEdit" title="Editar Activo" size="lg" theme="navy" icon="fa fa-lg fa-fw fa-pen" v-centered static-backdrop>
    <h1 class="text-center"></h1>
</x-adminlte-modal>
@stop

@section('css')
    <link rel="stylesheet" href="css/datatables.min.css">
@stop

@section('js')

    <script src="js/datatables.min.js"></script>
    @vite('resources/js/app.js')
@stop
