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
                <form action="{{ route('activos.store') }}" id="activo_save" method="POST">
                    @csrf
                    <div class="form-row">
                        <x-adminlte-input type="text" label="Codigo" name="codigo" fgroup-class="col"
                            placeholder="codigo" id="codigo" />
                        <x-adminlte-input type="text" label="Marca" name="marca" fgroup-class="col"
                            placeholder="Marca" id="marca" />
                        <x-adminlte-input type="text" label="Modelo" name="modelo" fgroup-class="col"
                            placeholder="Modelo" id="modelo" />
                        <x-adminlte-input type="text" label="Serial" name="serial" fgroup-class="col"
                            placeholder="Serial" id="serial" />
                    </div>
                    <div class="form-row">
                        <x-adminlte-input type="text" label="Descripcion" name="descripcion" fgroup-class="col"
                            placeholder="Descripcion" id="descripcion" />
                    </div>
                    <div class="form-row">
                        <x-adminlte-input type="text" label="Observaciones" name="observacion" fgroup-class="col"
                            placeholder="Observaciones" id="observacion" />
                    </div>
                    <div class="form-row">
                        <x-adminlte-input type="text" label="Condicion" name="condicion" fgroup-class="col"
                            placeholder="Condicion" id="condicion" />
                        <x-adminlte-input type="text" label="Adquisicion" name="adquisicion" fgroup-class="col"
                            placeholder="Adquisicion" id="adquisicion" />
                        <x-adminlte-input type="text" label="Fecha Adquisicion" name="fecha_adquisicion"
                            fgroup-class="col" placeholder="Fecha" id="fecha_adquisicion" />
                        <x-adminlte-input type="text" label="Moneda" name="moneda" fgroup-class="col"
                            placeholder="Moneda" id="moneda" />
                    </div>
                    <div class="form-row">
                        <x-adminlte-input type="text" label="Color" name="color" fgroup-class="col"
                            placeholder="Color" id="color" />
                        <x-adminlte-input type="text" label="Tipo" name="tipo" fgroup-class="col" placeholder="Tipo"
                            id="tipo" />
                        <x-adminlte-input type="text" label="Proveedor" name="proveedor" fgroup-class="col"
                            placeholder="Proveedor" id="proveedor" />
                        <x-adminlte-input type="text" label="Nro Factura" name="nro_factura" fgroup-class="col"
                            placeholder="Nro Factura" id="nro_factura" />
                    </div>
                </form>
                <x-slot name="footerSlot">
                    <x-adminlte-button id="activo_submit" form="activo_save" class="d-flex ml-auto" theme="primary"
                        label="Guardar" icon="fas fa-lg fa-save" type="submit" />
                </x-slot>
            </x-adminlte-card>
        </div>
    </div>
@stop
