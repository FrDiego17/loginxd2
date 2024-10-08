@auth 
<div id="nav_vista">
    <div class="fond_principal position-absolute"> 
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
            <a class="nav-link active mx-lg-1" aria-current="page" href="/logout"  data-translate="Logout">Cerrar Sesion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active mx-lg-1" aria-current="page" href="/home"  data-translate="inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active mx-lg-1 " href="/menu" data-translate="menu">Menú</a>
          </li>
          <li class="nav-item d-lg-flex d-none logo-container">
              <img src="{{ url('assets2/img/calavera-mexicana 1.png')}}" alt="Logo" class="logo">
              <p class="brand-name">ByteMex</p>
          </li>
          <li class="nav-item">
              <a class="nav-link active mx-lg-1" href="/chat">Chat</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active mx-lg-1" href="/contactanos"  data-translate="contactanos">Contáctanos</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active mx-lg-1" href="#">{{auth()->user()->username}}</a>
          </li>
          <!-- Carrito Icono  -->
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle"
            href="#" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"
            >
              <span class="badge badge-pill badge-dark" style="margin-top:43px">
                <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
              </span>

            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; top:90px; padding: 0px; border-color: #9DA0A2">
              <ul class="list-group" style="margin: 20px;">
                @include('layouts.partials.cart-drop')
              </ul>
            </div>
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

  @endauth 

@guest
<div id="nav_vista">
    <div class="fond_principal position-absolute"> 
        <img class="imgfondo" id="fondo2" src="{{ url('assets2/img/B.jpeg')}}">
    </div>
    <header> 
        <nav class="navbar bg-body-tertiary navbar-expand-lg">
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
                                <a class="nav-link active mx-lg-1" aria-current="page" href="/home" data-translate="inicio">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mx-lg-1" href="#" data-translate="menu">Menú</a>
                            </li>
                            <li class="nav-item d-lg-flex d-none logo-container">
                                <img src="{{ url('assets2/img/calavera-mexicana 1.png')}}" alt="Logo" class="logo">
                                <p class="brand-name">ByteMex</p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mx-lg-1" href="#" data-translate="pedidos-en-linea">Pedidos en línea</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mx-lg-1" href="/contactanos" data-translate="contactanos">Contáctanos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container-fluid d-flex justify-content-center align-items-center texto-responsive">
            <div class="text-center">
                <p class="titulo1 mt-5" data-translate="menu">Menú</p>
            </div>
        </div>
    </div>
    <script src="{{ url('assets2/js/translate.js')}}"></script>

@endguest
