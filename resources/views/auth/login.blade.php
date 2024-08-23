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
                <!-- <div class="text-end">
                    <img class="" src="/IMG/Logo.jpeg" width="100px">
                </div> -->
                
                <h2 class="fw-bold text-center py-5" data-translate="inicio-sesion">Inicio de Sesion</h2>

                <form action="/login" method="POST">
                    @csrf
                    @include('layouts.partials.messages')
                    <div class="mb-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text"> @</span>
                            <div class="form-floating">
                              <input name="username" type="text" class="form-control" id="floatingInputGroup1" placeholder="email">
                              <label for="floatingInputGroup1" data-translate="usuario-correo">Usuario/Correo</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text">🔒</span>
                            <div class="form-floating">
                              <input name="password" type="password" class="form-control" id="passwordInput" placeholder="Contraseña">
                              <label for="floatingInputGroup1" data-translate="contrasena">Contraseña</label>

                              <div class="Ojo">
                                <label class="containers">
                                    <input id="togglePassword" type="checkbox" checked="checked">
                                    <svg class="eye-slash" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"></path></svg>
                                    <svg class="eye" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"></path></svg>
                                </label>
                              </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="container w-50 my-5">
                        <div class="row text-center">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <input type="submit" value="Iniciar" data-translate="iniciar-sesion">
                        </div>
                    </div>
                    
                    <div class="my-3 text-center">
                        <span data-translate="no-tienes-cuenta">No tienes cuenta?</span> 
                        <a href="/register" data-translate="registrate">Registrate</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ url('assets2/js/translate.js')}}"></script>


@endsection
