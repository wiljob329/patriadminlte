@extends('adminlte::page')

@section('title', 'Sistema Patrimonio')

@section('content_header')
@stop

@section('content')
    <div class="container-fluid">
        <div class="row flex-column align-items-center">
            <ul class="mt-4 nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link bg-primary active" id="activo-tab" data-toggle="tab" data-target="#card-create"
                        type="button" role="tab" aria-controls="card-create" aria-selected="true">Activo
                        Normal</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="activov-tab" data-toggle="tab" data-target="#card-create-vehiculo"
                        type="button" role="tab" aria-controls="card-create-vehiculo" aria-selected="false">Activo
                        Vehiculo</button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="card-create" role="tabpanel" aria-labelledby="activo-tab">
                    <x-adminlte-card title="Creacion de Activo" theme="dark" class="mx-auto elevation-3 w-75">
                        <x-slot name="toolsSlot">
                            <a href="{{ route('activos.index') }}" class="btn btn-warning btn-sm"><i
                                    class="fas fa-undo"></i>
                                Volver
                            </a>
                        </x-slot>
                        <x-form.activo-form action="{{ route('activos.store') }}" id="activo_save" method="POST" create />
                        <x-slot name="footerSlot">
                            <x-adminlte-button id="activo_submit" form="activo_save" class="ml-auto d-flex" theme="primary"
                                label="Guardar" icon="fas fa-lg fa-save" type="submit" />
                        </x-slot>
                    </x-adminlte-card>
                </div>

                <div class="tab-pane fade" id="card-create-vehiculo" role="tabpanel" aria-labelledby="activov-tab">
                    <x-adminlte-card title="Creacion de Activo Vehiculo" theme="dark" class="mx-auto elevation-3 w-75">
                        <x-slot name="toolsSlot">
                            <a href="{{ route('activos.index') }}" class="btn btn-warning btn-sm"><i
                                    class="fas fa-undo"></i>
                                Volver
                            </a>
                        </x-slot>
                        <x-form.activo-form action="{{ route('activos.store') }}" id="activo_save" method="POST"
                            vehiculo />
                        <x-slot name="footerSlot">
                            <x-adminlte-button id="activo_submit" form="activo_save" class="ml-auto d-flex" theme="primary"
                                label="Guardar" icon="fas fa-lg fa-save" type="submit" />
                        </x-slot>
                    </x-adminlte-card>
                </div>

            </div>


        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href={{ asset('css/datatables.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/buttons.bootstrap4.css') }}>
@stop

@section('js')
    <script src={{ asset('js/datatables.min.js') }}></script>
    <script src={{ asset('js/dataTables.buttons.js') }}></script>
    <script src={{ asset('js/buttons.bootstrap4.js') }}></script>
@stop
