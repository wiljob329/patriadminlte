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
@stop

@section('css')
    <link rel="stylesheet" href="css/datatables.min.css">
@stop

@section('js')

    <script src="js/datatables.min.js"></script>
    <script> 
    
     $(function () {
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            selected: true,
            ajax: "{{ url('activos') }}",
            columns: [
                {data: 'codigo', name: 'codigo'},
                {data: 'modelo', name: 'modelo'},
                {data: 'descripcion', name: 'descripcion'},
                {data: 'estado', name: 'estado'},
                {data: 'fecha_adquisicion', name: 'fecha_adquisicion'},
                {
                    data: 'acciones', 
                    name: 'acciones', 
                    orderable: false, 
                    searchable: false
                },
            ]
        });
        $('.yajra-datatable tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });
    });
    </script>
@stop
