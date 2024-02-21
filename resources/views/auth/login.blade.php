<!DOCTYPE html>
<html lang="es">

<title>INICIO DE SESION</title>
@include('components.head-login')

<body>
    <div class="card shadow" id="card_index">
        <img id="img_index" src='vendor/adminlte/dist/img/logo_aguas.png' alt="">
        <br>
        <h1 class="h2">AGUAS DE MÉRIDA, C.A</h1>
        <p class="mb-4 lead">Gerencia de Protección al Patrimonio</p>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="post" id="login" action="{{ route('login') }}" novalidate class="col-12 needs-validation"
            autocomplete="off">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="27" fill="currentColor"
                            class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                        </svg>
                        <span>
                </div>
                <input type="text" class="form-control" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" autofocus autocomplete="username" placeholder="Correo" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="27" fill="currentColor"
                            class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                        </svg>
                    </span>
                </div>
                <input for="password" :value="__('Password')" type="password" class="form-control"
                    placeholder="Contraseña" name="password" autocomplete="current-password" required>
            </div>
            <div class="flex items-center justify-end mt-2">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('register') }}">
                    {{ __('¿No tienes cuenta?') }}
                </a>
            </div>
            <!-- <x-input-error :messages="$errors->get('password')" class="mt-2" />-->
            <button type="submit" class="btn btn-dark w-100 mb-3 shadow" name="login" value="login"
                style="background-color: #153757; font-weight: bold">{{ __('Iniciar Sesion') }}</button>
        </form>

    </div>

</body>

</html>
