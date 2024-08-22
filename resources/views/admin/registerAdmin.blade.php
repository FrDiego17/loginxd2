<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-translate="titulo1">Admin</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/admin.css')}}">
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
                            <input type="password" name="txtpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" data-translate-placeholder="contrasena-admin-placeholder">
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
                                                <input type="password" name="txtpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->password}}">
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
</body>
</html>
