@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])
@include('components.head-login')
<title>INICIO DE SESION</title>

@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

@php($login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login'))
@php($register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register'))
@php($password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset'))

@if (config('adminlte.use_route_url', false))
    @php($login_url = $login_url ? route($login_url) : '')
    @php($register_url = $register_url ? route($register_url) : '')
    @php($password_reset_url = $password_reset_url ? route($password_reset_url) : '')
@else
    @php($login_url = $login_url ? url($login_url) : '')
    @php($register_url = $register_url ? url($register_url) : '')
    @php($password_reset_url = $password_reset_url ? url($password_reset_url) : '')
@endif

@section('auth_header', __('adminlte::adminlte.login_message'))

<div class="card shadow" id="card_index">
    @section('auth_body')

        <form action="{{ $login_url }}" method="post" id="login">
            @csrf
            {{-- Correo --}}
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                        </div>
                    </div>
                </div>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" placeholder="Correo" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ 'Este campo es obligatorio' }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Contraseña --}}
            <div class="input-group mb-3">
                <div class="input-group-prepend">

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                        </div>
                    </div>
                </div>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Contraseña">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ 'Este campo es obligatorio' }}</strong>
                    </span>
                @enderror
            </div>

            @if ($register_url)
                <p class="my-0">
                    <a href="{{ $register_url }}">
                        {{ __('No tienes cuenta?') }}
                    </a>
                </p>
            @endif

            <button type="submit" class="btn btn-dark w-100 mb-3 shadow" name="login" value="login"
                style="background-color: #153757; font-weight: bold">{{ __('Iniciar Sesion') }}</button>

    </div>

    </form>
@stop
