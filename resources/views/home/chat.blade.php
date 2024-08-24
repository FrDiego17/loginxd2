<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ByteMex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="{{ url('assets2/img/favicon.webp')}}">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets2/css/chat.css')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/interfaz.css')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/burbuja.css')}}">
    <script>
        var avatarUrl = "{{ url('assets2/img/Mexibot.png') }}";
    </script>
</head>
<body>
    <div id="nav_vista">
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
                                    <a class="nav-link active mx-lg-1" aria-current="page" href="/logout" data-translate="Logout">Cerrar Sesión</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active mx-lg-1" aria-current="page" href="/home" data-translate="inicio">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active mx-lg-1" href="/menu" data-translate="menu">Menú</a>
                                </li>
                                <li class="nav-item d-lg-flex d-none logo-container">
                                    <img src="{{ url('assets2/img/calavera-mexicana 1.png')}}" alt="Logo" class="logo">
                                    <p class="brand-name">ByteMex</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active mx-lg-1" href="/chat" data-translate="Chat">Chat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active mx-lg-1" href="/contactanos" data-translate="contactanos">Contáctanos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active mx-lg-1" href="#">{{auth()->user()->username}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>    
    </div>  

<div class="container-fluid ">
  <div class="row">
      <div class="col-12 d-flex justify-content-end my-4">
          <div class="checkbox-wrapper-8">
              <input type="checkbox" id="cb3-8" class="tgl tgl-skewed" onclick="toggleLanguage()">
              <label for="cb3-8" data-tg-on="EN" data-tg-off="ES" class="tgl-btn"></label>
          </div>
      </div>
  </div>
</div>
<div class="contadu">
  <div class="burbuja">
    <span style="--i:22;"></span>
    <span style="--i:34;"></span>
    <span style="--i:45;"></span>
    <span style="--i:34;"></span>
    <span style="--i:53;"></span>
    <span style="--i:64;"></span>
    <span style="--i:21;"></span>
    <span style="--i:11;"></span>
    <span style="--i:27;"></span>
    <span style="--i:31;"></span>
    <span style="--i:45;"></span>
    <span style="--i:34;"></span>
    <span style="--i:53;"></span>
    <span style="--i:64;"></span>
    <span style="--i:01;"></span>
    <span style="--i:11;"></span>
    <span style="--i:29;"></span>
    <span style="--i:34;"></span>
    <span style="--i:45;"></span>
    <span style="--i:34;"></span>
    <span style="--i:53;"></span>
    <span style="--i:64;"></span>
    <span style="--i:11;"></span>
    <span style="--i:11;"></span>
    <span style="--i:34;"></span>
    <span style="--i:53;"></span>
    <span style="--i:64;"></span>
    <span style="--i:11;"></span>
    <span style="--i:11;"></span>
    <span style="--i:39;"></span>
    <span style="--i:69;"></span>
    <span style="--i:29;"></span>
    <span style="--i:60;"></span>
    <span style="--i:32;"></span>
    <span style="--i:99;"></span>
    <span style="--i:39;"></span>
  </div>
</div>
  <div class="chat">
    <div class="chat-title">
      <h1>Mexibot</h1>
      <h2>Asistente personal</h2>
        <figure class="avatar">
             <img src="{{ url('assets2/img/Mexibot.png')}}" alt="Avatar">
        </figure>
    </div>
    <div class="messages">
      <div class="messages-content"></div>
    </div>
    <div class="message-box">
      <textarea type="text" class="message-input" placeholder="Escribe un mensaje..."></textarea>
      <button type="submit" class="message-submit">Enviar</button>
    </div>
  </div>
  
  
  <!-- jQuery (cargado antes del script.js) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <!-- Bootstrap Bundle JS (incluye Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- jQuery Custom Scrollbar (mCustomScrollbar) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="{{ url('assets2/js/chat.js')}}"></script>
   <script src="{{ url('assets2/js/translate.js')}}"></script>

</html>