<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-translate="titulo1">Admin</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/admin.css')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/eye2.css')}}">
    <script src="https://kit.fontawesome.com/beae16a269.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ url('assets2/img/favicon.webp')}}">
</head>
<body>
    <div class="nav_admin">
        <header>
            <nav class="navbar navbar-expand-lg bg-primary border-bottom border-body ">
                <div class="container-fluid">
                    <a class="navbar-brand" data-translate="ByteMex">ByteMex</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
                            <li class="nav-item">
                                <a class="nav-link active mx-lg-1 " aria-current="page" href="/menu" data-translate="menu">Menú</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mx-lg-1 " aria-current="page" href="/reservasadmin" data-translate="reservas">Reservas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mx-lg-1 " aria-current="page" href="/admin" data-translate="Register Products">Agregar Producto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mx-lg-1 " aria-current="page" href="/logout" data-translate="Logout">Cerrar Sesion</a>
                            </li>
                        </ul>
                        <label for="switch" class="switch">
                            <input id="switch" type="checkbox" />
                            <span class="slider"></span>
                            <span class="decoration"></span>
                          </label>
                    </div>
                </div>
            </nav>
        </header>
    </div>
<div class="container-fluid">
    <div class="col-12 d-flex justify-content-end align-items-center my-4">
        
          
        <!-- Botón de cambio de idioma -->
        <div class="checkbox-wrapper-8 me-3">
            <input type="checkbox" id="cb3-8" class="tgl tgl-skewed" onclick="toggleLanguage()">
            <label for="cb3-8" data-tg-on="EN" data-tg-off="ES" class="tgl-btn"></label>
        </div>
    </div>
</div>
    <h1 class="text-center p-3 glow admin" data-translate="Admi" >Administrador</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('correcto'))
        <div class="alert alert-success">
            {{ session('correcto') }}
        </div>
    @endif

    @if (session('incorrecto'))
        <div class="alert alert-danger">
            {{ session('incorrecto') }}
        </div>
    @endif

    <!-- Apartado de registro de Admin-->
    <div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="exampleModalLabel" data-translate="registrar-admin">Registrar Admin</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route("admin.createAdmin")}}" method="post">
                        @csrf
                        <!-- Form fields -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" data-translate="id-admin">ID del Admin</label>
                            <input type="text" name="txtid_admin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" data-translate-placeholder="id-admin-placeholder">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" data-translate="usuario-admin">Usuario del Admin</label>
                            <input type="text" name="txtuser" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" data-translate-placeholder="usuario-admin-placeholder">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" data-translate="correo-admin">Correo del Admin</label>
                            <input type="email" name="txtemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" data-translate-placeholder="correo-admin-placeholder">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" data-translate="rol-admin">Rol del Admin</label>
                            <input type="text" name="txtrole" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" data-translate-placeholder="rol-admin-placeholder">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" data-translate="contrasena-admin">Contraseña del Admin</label>
                            <input type="password" name="txtpassword" class="form-control" id="passwordInput" aria-describedby="emailHelp" data-translate-placeholder="contrasena-admin-placeholder">
                            <div class="Ojo">
                                <label class="containers">
                                    <input id="togglePassword" type="checkbox" checked="checked">
                                    <svg class="eye-slash" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"></path></svg>
                                    <svg class="eye" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"></path></svg>
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" data-translate="confirmar-contrasena">Confirmación de Contraseña</label>
                            <input type="password" name="txtpassword_confirmation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" data-translate-placeholder="confirmar-contrasena-placeholder">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-translate="cerrar">Cerrar</button>
                            <button type="submit" class="btn btn-primary" data-translate="registrar">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="p-5 table-responsive">
        <button data-bs-toggle="modal" data-bs-target="#modalRegistrar" class="btn btn-success" data-translate="anadir-admin">Añadir Administrador</button>
        <table class="container">
            <thead class="Xd">
                <tr>
                    <th scope="col" data-translate="id">ID</th>
                    <th scope="col" data-translate="usuario">USUARIO</th>
                    <th scope="col" data-translate="role">ROLE</th>
                    <th scope="col" data-translate="email">EMAIL</th>
                    <th scope="col" data-translate="contrasena">CONTRASEÑA</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($datos as $item)
                    <tr>
                        <th>{{$item->id_admin}}</th>
                        <td>{{$item->username}}</td>
                        <td>{{$item->role}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->password}}</td>
                        <td class="Botones">
                            <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$item->id_admin}}" class="btn btn-warning btn-sn">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="{{route("admin.deleteAdmin", $item->id)}}" onclick="return confirmDelete(event);" class="btn btn-danger btn-sn">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                        <!-- Apartado de modificar datos-->
                        <div class="modal fade" id="modalEditar{{$item->id_admin}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title fs-5" id="exampleModalLabel" data-translate="modificar-datos">Modificar datos del producto</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route("admin.updateAdmin")}}" method="post">
                                            @csrf
                                            <!-- Form fields -->
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label" data-translate="id-admin">ID del Admin</label>
                                                <input type="text" name="txtid_admin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->id_admin}}" readonly>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label" data-translate="usuario-admin">Usuario del Admin</label>
                                                <input type="text" name="txtuser" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->username}}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label" data-translate="correo-admin">Correo del Admin</label>
                                                <input type="email" name="txtemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->email}}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label" data-translate="rol-admin">Rol del Admin</label>
                                                <input type="text" name="txtrole" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->role}}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label" data-translate="contrasena-admin">Contraseña del Admin</label>
                                                <input type="password" id="passwordInput" name="txtpassword" class="form-control" aria-describedby="emailHelp" value="{{$item->password}}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label" data-translate="confirmar-contrasena">Confirmación de Contraseña</label>
                                                <input type="password" name="txtpassword_confirmation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->password}}">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-translate="cerrar">Cerrar</button>
                                                <button type="submit" class="btn btn-primary" data-translate="modificar">Modificar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('assets2/js/translate.js')}}"></script>
    <script src="{{ url('assets2/js/admin.js')}}"></script>
    <script src="{{ url('assets2/js/Contraseña.js')}}"></script>
</body>
</html>
