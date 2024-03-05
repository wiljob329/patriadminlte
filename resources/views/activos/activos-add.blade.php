@extends('adminlte::page')

@section('title', 'Sistema Patrimonio')

@section('content_header')
@stop

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <x-adminlte-card title="Creacion de Activo" theme="dark" class="elevation-3 mt-4 w-75">
                <x-slot name="toolsSlot">
                    <a href="{{ route('dashboard') }}" class="btn btn-warning btn-sm"><i class="fas fa-undo"></i>
                        Volver
                    </a>
                </x-slot>
                <x-form.activo-form action="{{ route('activos.store') }}" id="activo_save" method="POST" />
                <x-slot name="footerSlot">
                    <x-adminlte-button id="activo_submit" form="activo_save" class="d-flex ml-auto" theme="primary"
                        label="Guardar" icon="fas fa-lg fa-save" type="submit" />
                </x-slot>
            </x-adminlte-card>
        </div>
    </div>
@stop
