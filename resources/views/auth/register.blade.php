@include('components.head-login')
<title>Registro</title>

<body>
    <div class="card shadow" id="card_register">
        <img id="img_index" src='vendor/adminlte/dist/img/logo_aguas.png' alt="">
        <br>
        <h1 class="h2">AGUAS DE MÉRIDA, C.A</h1>
        <p class="mb-4 lead">Gerencia de Protección al Patrimonio</p>
        <form method="POST" action="{{ route('register') }}" novalidate class="col-10 needs-validation"
            autocomplete="off">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="27" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                        <span>
                </div>
                <input class="form-control" class="block mt-1 w-full" id="name" type="text" name="name"
                    :value="old('name')" autofocus autocomplete="name" placeholder="Nombre" required>
            </div>
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
                <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required autocomplete="username" placeholder="Correo">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="27" fill="currentColor"
                            class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                        </svg>
                        <span>
                </div>
                <input class="form-control" id="password" class="block mt-1 w-full" type="password" name="password"
                    required autocomplete="new-password" placeholder="Contraseña">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="27" fill="currentColor"
                            class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                        </svg>
                        <span>
                </div>
                <input class="form-control" id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password"
                    placeholder="Confirmar Contraseña">

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-2">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    {{ __('Ya posees cuenta?') }}
                </a>
                <button type="submit" class="btn btn-dark w-100 mb-3 shadow" name="login" value="login"
                    style="background-color: #153757; font-weight: bold">{{ __('Registrarse') }}
                </button>
            </div>
        </form>
    </div>
</body>
