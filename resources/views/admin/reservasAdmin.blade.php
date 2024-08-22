<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-translate="Admin">Admin</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}"> 
    <link rel="stylesheet" href="{{ url('assets2/css/reservasAdmin.css')}}">
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
                          <a class="nav-link active mx-lg-1" aria-current="page" href="/admin" data-translate="Register Products">Agregar Producto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-lg-1" aria-current="page" href="/registeradmin" data-translate="Register Admin">Registar Admin</a>
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
    <h1 class="text-center p-3 admin glow rese" data-translate="reservas" >Reservas</h1>

   <div class="container">
    
<div class="main">
  <div class="card">
    <div class="fl">
      <div class="fullscreen">
        <svg class="fullscreen_svg" viewBox="0 0 100 100"><path </svg>
      </div>
    </div>
    <div class="card_content">
      <button data-translate="user">Usuario</button>
    </div>
    <div class="card_back"></div>
  </div>
  <div class="data">
    <div class="text">
      <div class="text_m"  data-translate="reservas">Reserva</div>
    </div>
  </div>
  <div class="btns">
    <div class="likes">
      <svg viewBox="-2 0 105 92" class="likes_svg"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71Z"></path></svg><span class="likes_text">22</span>
    </div>
    <div class="comments">
      <svg title="Comment" viewBox="-405.9 238 56.3 54.8" class="comments_svg"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg><span class="comments_text">12</span>
    </div>
    <div class="views">
      <svg title="Views" viewBox="0 0 30.5 16.5" class="views_svg"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg><span class="views_text">332</span>
    </div>
  </div>
</div>

<div class="main">
  <div class="card">
    <div class="fl">
      <div class="fullscreen">
        <svg class="fullscreen_svg" viewBox="0 0 100 100"><path </svg>
      </div>
    </div>
    <div class="card_content">
      <button data-translate="user">Usuario</button>
    </div>
    <div class="card_back"></div>
  </div>
  <div class="data">
    <div class="text">
      <div class="text_m"  data-translate="reservas">Reserva</div>
    </div>
  </div>
  <div class="btns">
    <div class="likes">
      <svg viewBox="-2 0 105 92" class="likes_svg"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71Z"></path></svg><span class="likes_text">22</span>
    </div>
    <div class="comments">
      <svg title="Comment" viewBox="-405.9 238 56.3 54.8" class="comments_svg"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg><span class="comments_text">12</span>
    </div>
    <div class="views">
      <svg title="Views" viewBox="0 0 30.5 16.5" class="views_svg"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg><span class="views_text">332</span>
    </div>
  </div>
</div>

<div class="main">
    <div class="card">
      <div class="fl">
        <div class="fullscreen">
          <svg class="fullscreen_svg" viewBox="0 0 100 100"><path </svg>
        </div>
      </div>
      <div class="card_content">
        <button data-translate="user">Usuario</button>
      </div>
      <div class="card_back"></div>
    </div>
    <div class="data">
      <div class="text">
        <div class="text_m"  data-translate="reservas">Reserva</div>
      </div>
    </div>
    <div class="btns">
      <div class="likes">
        <svg viewBox="-2 0 105 92" class="likes_svg"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71Z"></path></svg><span class="likes_text">22</span>
      </div>
      <div class="comments">
        <svg title="Comment" viewBox="-405.9 238 56.3 54.8" class="comments_svg"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg><span class="comments_text">12</span>
      </div>
      <div class="views">
        <svg title="Views" viewBox="0 0 30.5 16.5" class="views_svg"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg><span class="views_text">332</span>
      </div>
    </div>
  </div>
 
   </div>
   <div class="container">
    
    <div class="main">
      <div class="card">
        <div class="fl">
          <div class="fullscreen">
            <svg class="fullscreen_svg" viewBox="0 0 100 100"><path </svg>
          </div>
        </div>
        <div class="card_content">
          <button data-translate="user">Usuario</button>
        </div>
        <div class="card_back"></div>
      </div>
      <div class="data">
        <div class="text">
          <div class="text_m"  data-translate="reservas">Reserva</div>
        </div>
      </div>
      <div class="btns">
        <div class="likes">
          <svg viewBox="-2 0 105 92" class="likes_svg"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71Z"></path></svg><span class="likes_text">22</span>
        </div>
        <div class="comments">
          <svg title="Comment" viewBox="-405.9 238 56.3 54.8" class="comments_svg"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg><span class="comments_text">12</span>
        </div>
        <div class="views">
          <svg title="Views" viewBox="0 0 30.5 16.5" class="views_svg"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg><span class="views_text">332</span>
        </div>
      </div>
    </div>
    
    <div class="main">
      <div class="card">
        <div class="fl">
          <div class="fullscreen">
            <svg class="fullscreen_svg" viewBox="0 0 100 100"><path </svg>
          </div>
        </div>
        <div class="card_content">
          <button data-translate="user">Usuario</button>
        </div>
        <div class="card_back"></div>
      </div>
      <div class="data">
        <div class="text">
          <div class="text_m"  data-translate="reservas">Reserva</div>
        </div>
      </div>
      <div class="btns">
        <div class="likes">
          <svg viewBox="-2 0 105 92" class="likes_svg"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71Z"></path></svg><span class="likes_text">22</span>
        </div>
        <div class="comments">
          <svg title="Comment" viewBox="-405.9 238 56.3 54.8" class="comments_svg"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg><span class="comments_text">12</span>
        </div>
        <div class="views">
          <svg title="Views" viewBox="0 0 30.5 16.5" class="views_svg"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg><span class="views_text">332</span>
        </div>
      </div>
    </div>
    
    <div class="main">
        <div class="card">
          <div class="fl">
            <div class="fullscreen">
              <svg class="fullscreen_svg" viewBox="0 0 100 100"><path </svg>
            </div>
          </div>
          <div class="card_content">
            <button data-translate="user">Usuario</button>
          </div>
          <div class="card_back"></div>
        </div>
        <div class="data">
          <div class="text">
            <div class="text_m"  data-translate="reservas">Reserva</div>
          </div>
        </div>
        <div class="btns">
          <div class="likes">
            <svg viewBox="-2 0 105 92" class="likes_svg"><path d="M85.24 2.67C72.29-3.08 55.75 2.67 50 14.9 44.25 2 27-3.8 14.76 2.67 1.1 9.14-5.37 25 5.42 44.38 13.33 58 27 68.11 50 86.81 73.73 68.11 87.39 58 94.58 44.38c10.79-18.7 4.32-35.24-9.34-41.71Z"></path></svg><span class="likes_text">22</span>
          </div>
          <div class="comments">
            <svg title="Comment" viewBox="-405.9 238 56.3 54.8" class="comments_svg"><path d="M-391 291.4c0 1.5 1.2 1.7 1.9 1.2 1.8-1.6 15.9-14.6 15.9-14.6h19.3c3.8 0 4.4-.8 4.4-4.5v-31.1c0-3.7-.8-4.5-4.4-4.5h-47.4c-3.6 0-4.4.9-4.4 4.5v31.1c0 3.7.7 4.4 4.4 4.4h10.4v13.5z"></path></svg><span class="comments_text">12</span>
          </div>
          <div class="views">
            <svg title="Views" viewBox="0 0 30.5 16.5" class="views_svg"><path d="M15.3 0C8.9 0 3.3 3.3 0 8.3c3.3 5 8.9 8.3 15.3 8.3s12-3.3 15.3-8.3C27.3 3.3 21.7 0 15.3 0zm0 14.5c-3.4 0-6.2-2.8-6.2-6.2C9 4.8 11.8 2 15.3 2c3.4 0 6.2 2.8 6.2 6.2 0 3.5-2.8 6.3-6.2 6.3z"></path></svg><span class="views_text">332</span>
          </div>
        </div>
      </div>
     
       </div>   








    <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('assets2/js/translate.js')}}"></script>
    <script src="{{ url('assets2/js/calendario.js')}}"></script>
    <script src="{{ url('assets2/js/admin.js')}}"></script>
</body>
</html>