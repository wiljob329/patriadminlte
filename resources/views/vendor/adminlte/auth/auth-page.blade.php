@extends('adminlte::master')
@include('components.head-login')

@php($dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home'))

@if (config('adminlte.use_route_url', false))
    @php($dashboard_url = $dashboard_url ? route($dashboard_url) : '')
@else
    @php($dashboard_url = $dashboard_url ? url($dashboard_url) : '')
@endif

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body'){{ ($auth_type ?? 'login') . '-page' }}@stop

@section('body')

    {{-- Logo Image --}}
    <img id="img_index" src='vendor/adminlte/dist/img/logo_aguas.png' alt="">

    {{-- Card Header --}}
    @hasSection('auth_header')
    @endif
    <br>
    <h1 class="h2">AGUAS DE MÉRIDA, C.A</h1>
    <p class="mb-4 lead">Gerencia de Protección al Patrimonio</p>
    @yield('auth_body')
    </div>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
