@extends('adminlte::page')

@section('title', 'Sistema Patrimonio')

@section('content_header')
@stop

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center flex-column align-items-center">
            <ul class="mt-4 mb-2 nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button"
                        role="tab" aria-controls="home" aria-selected="true">Activo Normal</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button"
                        role="tab" aria-controls="profile" aria-selected="false">Activo Vehiculo</button>
                </li>
            </ul>

            <x-adminlte-card title="Creacion de Activo" theme="dark" class="elevation-3 w-75" id="card-create">
                <x-slot name="toolsSlot">
                    <a href="{{ route('activos.index') }}" class="btn btn-warning btn-sm"><i class="fas fa-undo"></i>
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
