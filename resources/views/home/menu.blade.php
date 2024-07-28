<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="{{ url('assets2/css/Style.css')}}">
    <link href="{{ url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="icon" href="../imagenes/favicon.webp">
    <link rel="stylesheet" href="{{ url('assets2/css/menu.css')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/nav.css')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/slider.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/beae16a269.js" crossorigin="anonymous"></script>
</head>
<body>
  <div id="nav_vista">
    <div class="fond_principal position-absolute" > 
      <img class="imgfondo" id="fondo2" src="{{ url('assets2/img/B.jpeg')}}">
    </div>
    <header> 
      <nav class="navbar bg-body-tertiary navbar-expand-lg  ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    <img src="{{ url('assets2/img/calavera-mexicana 1.png')}}" alt="Logo ByteMex" class="d-lg-none mr-2">
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav d-flex justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active mx-lg-1" aria-current="page" href="#">Inicio de Sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active mx-lg-1 " href="menu.html">Menú</a>
          </li>
          <li class="nav-item d-lg-flex d-none logo-container">
              <img src="{{ url('assets2/img/calavera-mexicana 1.png')}}" alt="Logo" class="logo">
              <p class="brand-name">ByteMex</p>
          </li>
          <li class="nav-item">
              <a class="nav-link active mx-lg-1" href="#">Pedidos en línea</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active mx-lg-1" href="#footer">Contáctanos</a>
          </li>
        </ul>
      </div>
      </nav>
    </header>
    <div class="container-fluid d-flex justify-content-center align-items-center texto-responsive">
      <div class="text-center">
          <p class="titulo1 mt-5">Menú</p>
      </div>
    </div>
  </div>

  <section id="slider">
    <img src="{{ url('assets2/img/tacos_slider.jpeg')}}">
    <img src="{{ url('assets2/img/restaurante.png')}}">
    <img src="{{ url('assets2/img/burrito_slider.jpeg')}}"> 
    <img src="{{ url('assets2/img/restfuera.jpeg')}}">
    <img src="{{ url('assets2/img/personas.png')}}">
  </section>

  <main class="container-fluid " id="doodles">
    @for ($i = 0; $i < sizeof($filtro); $i++)
      <div class="p-2">
        <p class=" honk-menu text-center">{{array_keys($filtro)[$i]}}</p>
          <div id="carouselExampleControls{{$i}}" class="carousel">
            <div class="carousel-inner">
              @foreach ($filtro[array_keys($filtro)[$i]] as $producto)
                  <div class="carousel-item active">
                  <div class="container">  
                    <div class="card">
                      @if (isset($producto->image))
                        <div class="imgBx">  
                          <img src="{{ asset('assets2/img/' . $producto->image)}}">  
                        </div>
                      @endif    
                      <div class="contentBx">  
                      
                        <h2>{{$producto->Nombre}}</h2> 
                        <h2>Precio:</h2> 
                        <h4 class="text-white-50">${{ $producto->Precio }}</h4>  
                        <a href="#">Comprar</a>  
                      </div>  
                    </div>  
                  </div>
                </div>
                
              @endforeach 
            </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls{{$i}}" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls{{$i}}" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    @endfor  
  </main>
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="{{ url('assets/js/bootstrap.min.js')}}"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="{{ url('assets2/js/menu.js')}}"></script>
</body>
</html>