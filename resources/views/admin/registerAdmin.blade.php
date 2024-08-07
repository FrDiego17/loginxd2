<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/admin.css')}}">
    <script src="https://kit.fontawesome.com/beae16a269.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ url('assets2/img/calavera-mexicana.png')}}">
</head>
<body>
<div class="nav_admin">
        <header>
            <nav class="navbar navbar-expand-lg bg-primary border-bottom border-body ">
                <div class="container-fluid">
                    <a class="navbar-brand">ByteMex</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active mx-lg-1 text-light" aria-current="page" href="/menu">Menú</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-lg-1 text-light" aria-current="page" href="/admin">Agregar Producto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-lg-1 text-light" aria-current="page" href="/logout">Cerrar Sesion</a>
                        </li>
                    </ul>
                    <span class="navbar-text text-light">
                        Bienvenido Administrador
                    </span>
                    </div>
                </div>
            </nav>
        </header>
    </div>

    <h1 class="display-4 welcome-text bien">Admin</h1>
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


    <script>
        var res=function(){
            var not=confirm("¿Estas seguro de eliminar?");
            return not;
        }
    </script>

    <!-- Apartado de registro de Admin-->
    <div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="exampleModalLabel">Registar Admin</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{route("admin.createAdmin")}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID del Admin</label>
                    <input type="text" name="txtid_admin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario del Admin</label>
                    <input type="text" name="txtuser" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo del Admin</label>
                    <input type="email" name="txtemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Rol del Admin</label>
                    <input type="text" name="txtrole" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contraseña del Admin</label>
                    <input type="password" name="txtpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Confirmacion de Contraseña</label>
                    <input type="password" name="txtpassword_confirmation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Registar</button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    

    <div class="p-5 table-responsive">
        <button data-bs-toggle="modal" data-bs-target="#modalRegistrar" class="btn btn-success">Añadir producto</button>
        <table class="container">
            <thead class="Xd">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">USUARIO</th>
                    <th scope="col">ROLE</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">CONTRASEÑA</th>
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
                        <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$item->id_admin}}" class="btn btn-warning btn-sn"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{ route('admin.deleteAdmin', $item->id) }}" onclick="return confirm('¿Estás seguro de que deseas eliminar este administrador?')" class="btn btn-danger btn-sn">
                            <i class="fa-solid fa-trash"></i>
                        </a>

                    </td>

                        

                        <!-- Apartado de modificar datos-->
                        <div class="modal fade" id="modalEditar{{$item->id_admin}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel">Modificar datos del producto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="{{route("admin.updateAdmin")}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Id del admin</label>
                                        <input type="text" value="{{$item->id_admin}}" readonly name="txtid_admin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Role del Admin</label>
                                        <input name="txtrole" value="{{$item->role}}" readonly class="form-control" type="text" id="formFile">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Usuario del Admin</label>
                                        <input name="txtuser" value="{{$item->username}}" class="form-control" type="text" id="formFile">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email del Admin</label>
                                        <input type="email" value="{{$item->email}}" name="txtemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">password del admin</label>
                                        <input type="password" value="{{$item->password}}" name="txtpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Modificar</button>
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
</body>
</html>