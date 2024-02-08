@extends('adminlte::page')

@section('title', 'Sistema Patrimonio')

@section('content_header')
    <h1>Patrimonio</h1>
@stop

@section('content')
    <p>Sistema de Gestion de Activos Patrimoniales</p>
    <x-adminlte-input name="iBasic"/>
    <x-adminlte-card></x-adminlte-card>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
