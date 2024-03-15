@extends('adminlte::page')

@section('title', 'Sistema Patrimonio')

@section('content_header')
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <x-adminlte-small-box title="{{ $activos }}" text="Total de Activos" icon="fas fa-fw fa-city text-teal"
                theme="primary" url="{{ route('activos.index') }}" url-text="Ver los activos" class="mt-3 elevation-3 col-4" />
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="css/datatables.min.css">
@stop

@section('js')
    <script src="js/datatables.min.js"></script>
@stop
