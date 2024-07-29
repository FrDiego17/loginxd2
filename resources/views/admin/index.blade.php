
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
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
                            <a class="nav-link active mx-lg-1 text-light" aria-current="page" href="/registeradmin">Registar Admin</a>
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

    <h1 class="text-center p-3">Admin</h1>
    @if(session("correcto"))
        <div class="alert alert-success">{{session("correcto")}}</div>
    @endif

    @if(session("incorrecto"))
        <div class="alert alert-danger">{{session("incorrecto")}}</div>
    @endif

    <script>
        var res=function(){
            var not=confirm("¿Estas seguro de eliminar?");
            return not;
        }
    </script>

    <!-- Modal de registro datos-->
    <div class="modal fade" id="modalRegistrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registar productos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{route("admin.createProduct")}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Codigo del producto</label>
                    <input type="text" name="txtcodigo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Imagen del producto</label>
                    <input name="txtimage" class="form-control" type="file" id="formFile">
                </div>

                <div class="mb-3">
                    <select name="txtcategoria" class="form-select" id="exampleSelect" aria-label="Default select example">
                        <option selected>Categoría del producto</option>
                        <option value="Tacos">Tacos</option>
                        <option value="Tortas/Hamburguesas">Tortas/Hamburguesas</option>
                        <option value="Burritos">Burritos</option>
                        <option value="Quesadillas">Quesadillas</option>
                        <option value="Postres">Postres</option>
                        <option value="Bebidas">Bebidas</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                    <input type="text" name="txtnombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Precio del producto</label>
                    <input type="text" name="txtprecio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cantidad del producto</label>
                    <input type="text" name="txtcantidad" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
        <table class="table table-striped table-bordered table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">CODIGO</th>
                    <th scope="col">IMAGEN</th>
                    <th scope="col">CATEGORÍA</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">CANTIDAD</th>
                    <th></th>       
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($datos as $item)
                    <tr>
                        <th>{{$item->id_producto}}</th>
                        <th>
                            @if ($item->image)
                                <img src="{{ asset('assets2/img/' . $item->image) }}" alt="Imagen del producto" style="width: 100px;">
                            @endif
                        </th>
                        <td>{{$item->categoria}}</td>
                        <td>{{$item->Nombre}}</td>
                        <td>{{$item->Precio}}</td>
                        <td>{{$item->cantidad}}</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$item->id_producto}}" class="btn btn-warning btn-sn"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{route("admin.deleteProduct", $item->id_producto)}}" onclick="return res()" class="btn btn-danger btn-sn"><i class="fa-solid fa-trash"></i></a>
                        </td>

                        

                        <!-- Modal de modificar datos-->
                        <div class="modal fade" id="modalEditar{{$item->id_producto}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar datos del producto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="{{route("admin.updateProduct")}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Codigo del producto</label>
                                        <input type="text" value="{{$item->id_producto}}" readonly name="txtcodigo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Imagen del producto</label>
                                        <input name="txtimage" value="{{$item->image}}" class="form-control" type="file" id="formFile">
                                    </div>

                                    <div class="mb-3">
                                        <select value="{{$item->categoria}}" name="txtcategoria"  class="form-select"  id="exampleSelect" aria-label="Default select example">
                                            <option selected>Categoría del producto</option>
                                            <option value="1">Tacos</option>
                                            <option value="2">Tortas/Hamburguesas</option>
                                            <option value="3">Burritos</option>
                                            <option value="4">Quesadillas</option>
                                            <option value="5">Postres</option>
                                            <option value="6">Bebidas</option>
                                        </select>
                                    </div>                                    

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                                        <input type="text" value="{{$item->Nombre}}" name="txtnombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Precio del producto</label>
                                        <input type="text" value="{{$item->Precio}}" name="txtprecio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Cantidad del producto</label>
                                        <input type="number" name="txtcantidad" value="{{$item->cantidad}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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