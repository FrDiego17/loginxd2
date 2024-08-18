@extends('layouts.auth-master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-end my-4">
            <div class="checkbox-wrapper-8">
                <input type="checkbox" id="cb3-8" class="tgl tgl-skewed" onclick="toggleLanguage()">
                <label for="cb3-8" data-tg-on="EN" data-tg-off="ES" class="tgl-btn"></label>
            </div>
        </div>
    </div>
</div>

<div class="col d-lg-block col-md-5 col-lg-5 col-xl-6 rounded divfondo">
    
</div>

<div class="container w-75 bg-primary mt-5 rounded shadow">
    <div class="row align-items-stretch">
        <div class="col bg d-none d-lg-block col-md-6 col-lg-5 col-xl-6 rounded">
        </div>

        <div class="col bg-white pd-5 roundend">
            <div class="p-2">
                <h2 class="fw-bold text-center py-5" data-translate="registro">Registro</h2>

                <form action="/register" method="POST">
                    @csrf
                    @include('layouts.partials.messages')
                    <div class="mb-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text">^̮^</span>
                            <div class="form-floating">
                              <input name="username" type="text" class="form-control" id="floatingInputGroup1" placeholder="Usuario" data-translate="usuario">
                              <label for="floatingInputGroup1" data-translate="usuario">Usuario</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text"> @</span>
                            <div class="form-floating">
                              <input name="email" type="email" class="form-control" id="floatingInputGroup1" placeholder="email" data-translate="correo">
                              <label for="floatingInputGroup1" data-translate="correo">Correo</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text">🔒</span>
                            <div class="form-floating">
                              <input name="password" type="password" class="form-control" id="floatingInputGroup1" placeholder="Contraseña" data-translate="contraseña">
                              <label for="floatingInputGroup1" data-translate="contrasena">Contraseña</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text">🔒</span>
                            <div class="form-floating">
                              <input name="password_confirmation" type="password" class="form-control" id="floatingInputGroup1" placeholder="Contraseña" data-translate="confirmar-contraseña">
                              <label for="floatingInputGroup1" data-translate="confirmar-contraseña">Confirmar Contraseña</label>
                            </div>
                        </div>
                    </div>

                    <div class="container w-50 my-5">
                        <div class="row text-center">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <input type="submit" value="Registrarse" data-translate="registrarse">
                        </div>
                    </div>
                    
                    <div class="my-3 text-center">
                        <span data-translate="ya-tienes-cuenta">Ya tienes una cuenta?</span>
                        <a href="/login" data-translate="inicia-sesion">Inicia Sesión</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ url('assets2/js/translate.js') }}"></script>

@endsection
