@auth 
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
            <a class="nav-link active mx-lg-1" aria-current="page" href="/logout">Cerrar Sesion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active mx-lg-1" aria-current="page" href="/home">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active mx-lg-1 " href="/menu">Menú</a>
          </li>
          <li class="nav-item d-lg-flex d-none logo-container">
              <img src="{{ url('assets2/img/calavera-mexicana 1.png')}}" alt="Logo" class="logo">
              <p class="brand-name">ByteMex</p>
          </li>
          <li class="nav-item">
              <a class="nav-link active mx-lg-1" href="/chat">Chat</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active mx-lg-1" href="/contactanos">Contáctanos</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active mx-lg-1" href="#">{{auth()->user()->username}}</a>
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
            <a class="nav-link active mx-lg-1" aria-current="page" href="/home">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active mx-lg-1 " href="#">Menú</a>
          </li>
          <li class="nav-item d-lg-flex d-none logo-container">
              <img src="{{ url('assets2/img/calavera-mexicana 1.png')}}" alt="Logo" class="logo">
              <p class="brand-name">ByteMex</p>
          </li>
          <li class="nav-item">
              <a class="nav-link active mx-lg-1" href="#">Pedidos en línea</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active mx-lg-1" href="/contactanos">Contáctanos</a>
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
      
  @endguest

