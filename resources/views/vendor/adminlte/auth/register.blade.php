@extends('adminlte::auth.auth-page', ['auth_type' => 'register'])
@include('components.head-login')
<title>REGISTRO</title>

@php($login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login'))
@php($register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register'))

@if (config('adminlte.use_route_url', false))
    @php($login_url = $login_url ? route($login_url) : '')
    @php($register_url = $register_url ? route($register_url) : '')
@else
    @php($login_url = $login_url ? url($login_url) : '')
    @php($register_url = $register_url ? url($register_url) : '')
@endif

@section('auth_header', __('adminlte::adminlte.register_message'))
<div class="card shadow" id="card_register">

    @section('auth_body')
        <form action="{{ $register_url }}" method="post" id="login">
            @csrf

            {{-- Name field --}}
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                    </div>
                </div>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" placeholder="Nombre" autofocus>
            </div>


            {{-- Email field --}}
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                    </div>
                </div>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" placeholder="Correo">
            </div>


            {{-- Password field --}}
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                    </div>
                </div>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Contraseña">
            </div>

            {{-- Confirm password field --}}
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                    </div>
                </div>

                <input type="password" name="password_confirmation"
                    class="form-control @error('password_confirmation') is-invalid @enderror"
                    placeholder="Confirmar Contraseña">
            </div>

            @if ($login_url)
                <p class="my-0">
                    <a href="{{ $login_url }}">
                        {{ __('Ya tienes cuenta?') }}
                    </a>
                </p>
            @endif
            <button type="submit" class="btn btn-dark w-100 mb-3 shadow" name="login" value="login"
                style="background-color: #153757; font-weight: bold">{{ __('Registrarse') }}
            </button>
        </form>
    </div>

@stop
