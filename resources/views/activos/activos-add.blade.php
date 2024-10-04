@extends('adminlte::page')

@section('title', 'Sistema Patrimonio')

@section('content_header')
@stop
@section('content')
    <div class="row flex-column align-items-center">
        <x-adminlte-card id="card-create" title="Creacion de Activo" theme="dark" class="mx-auto mt-4 elevation-3 w-75">
            <x-slot name="toolsSlot">
                <a href="{{ route('activos.index') }}" class="btn btn-warning btn-sm"><i class="fas fa-undo"></i>
                    Volver
                </a>
            </x-slot>
            <x-form.activo-form action="{{ route('activos.store') }}" id="activo_save" class="mt-4" method="POST" create
                :$estados :$condiciones :$adquisiciones :$colores />
            <x-slot name="footerSlot">
                <x-adminlte-button id="activo_submit" form="activo_save" class="ml-auto d-flex" theme="primary"
                    label="Guardar" icon="fas fa-lg fa-save" type="submit" />
            </x-slot>
        </x-adminlte-card>
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
    <script>
        $(document).ready(function() {
            $("#info_financiera").on("click", function() {
                $('#detalle_financiera').fadeToggle(200);
                $('#info_financiera_icon').toggleClass('fa-caret-right fa-caret-down');
                {{-- var optional_info_open = $('#optional_info_icon').hasClass('fa-caret-down'); --}}
                {{-- document.cookie = "optional_info_open=" + optional_info_open + '; path=/'; --}}
            });
            $("#info_adicional").on("click", function() {
                $('#detalle_adicional').fadeToggle(200);
                $('#info_adicional_icon').toggleClass('fa-caret-right fa-caret-down');
                {{-- var optional_info_open = $('#optional_info_icon').hasClass('fa-caret-down'); --}}
                {{-- document.cookie = "optional_info_open=" + optional_info_open + '; path=/'; --}}
            });
            $("#info_vehicular").on("click", function() {
                $('#detalle_vehicular').fadeToggle(200);
                $('#info_vehicular_icon').toggleClass('fa-caret-right fa-caret-down');
                {{-- var optional_info_open = $('#optional_info_icon').hasClass('fa-caret-down'); --}}
                {{-- document.cookie = "optional_info_open=" + optional_info_open + '; path=/'; --}}
            });
        })
    </script>
@stop
