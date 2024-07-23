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
                    <img src="../imagenes/calavera-mexicana.png" alt="Logo ByteMex" class="d-lg-none mr-2">
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
              <img src="../imagenes/calavera-mexicana.png" alt="Logo" class="logo">
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
      
      <div class="p-2 ">
        <p class=" honk-menu text-center">Tacos</p>
        <div id="carouselExampleControls0" class="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/tacos_pastor.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Tacos al pastor</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/tacos_chicharron.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Tacos de chicharrón</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/tacos_pollo.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Tacos de pollo</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/tacos_res.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Tacos de res</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/tacos_carnita.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Tacos de carnitas</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/tacos_birria.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Tacos de birria</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="p-2 ">
        <p class="text-center honk-menu">Burritos</p>
        <div id="carouselExampleControls1" class="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/burrito_pastor.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Burritos al pastor</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/quesarrito.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Quesarritos</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/californiano.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Californiano</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/burriko.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>BurriKO</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/burritipi.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Burritos típicos</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/burribirria.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Burribirria</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>    
      <div class="p-2 ">
        <p class="text-center honk-menu">Quesadillas</p>
        <div id="carouselExampleControls2" class="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/quesabirria.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Quesabirria</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/quesadillatipi.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Quesadilla típica</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/quesadilla_pollo.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Quesadilla de pollo</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/quesadilla_chicharron.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Quesadilla de chicharrón</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/quesadilla_tinga.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Quesadilla de tinga</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/quesailla_camaron.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Quesadilla de camarón</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
          </div>
          
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="p-2 ">
        <p class="text-center honk-menu">Tortas y hamburguesas</p>
        <div id="carouselExampleControls3" class="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/monumental.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>La monumental</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/torta_especial.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>La especial</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/torta_birria.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Torta birria</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/hamburguesa_birria.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Hamburguesa de birria</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/hamburguesa_ranchera.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2> Ranchera Mexicana</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>  
          </div>
          
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="p-2 ">
        <p class="text-center honk-menu"> Bebidas </p>
        <div id="carouselExampleControls4" class="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/cebada.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Cebada</h2>  
                    <div class="ingredientes">  
                      <h3>Tamaño:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/horchata.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Horchata</h2>  
                    <div class="ingredientes">  
                      <h3>Tamaño:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/Frozen.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Frozen</h2>  
                    <div class="ingredientes">  
                      <h3>Opciones:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/coca.jpg">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Coca-cola</h2>  
                    <div class="ingredientes">  
                      <h3>Opciones:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/pepsi.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Pepsi</h2>  
                    <div class="ingredientes">  
                      <h3>Opciones:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/te.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Té helado</h2>  
                    <div class="ingredientes">  
                      <h3>Opciones:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>       
      <div class="p-2 ">
        <p class="text-center honk-menu">Postres</p>
        <div id="carouselExampleControls5" class="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/pastel.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Pastel</h2>  
                    <div class="ingredientes">  
                      <h3>Opciones:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/flan.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Flan</h2>  
                    <div class="ingredientes">  
                      <h3>Ingredientes:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/cheesecake.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Cheesecake</h2>  
                    <div class="ingredientes">  
                      <h3>Opciones:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/chocolate_churros.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Chocolate y churros</h2>  
                    <div class="ingredientes">  
                      <h3>Opciones:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">  
                <div class="card">  
                  <div class="imgBx">  
                    <img src="../imagenes/churrobox.png">  
                  </div>  
                  <div class="contentBx">  
                    <h2>Churrobox</h2>  
                    <div class="ingredientes">  
                      <h3>Tamaño:</h3>  
                    </div>  
                    <div class="color">  
                      <span class="icon-[twemoji--onion]"></span>
                      <span></span>  
                      <span></span>  
                    </div>  
                    <a href="#">Comprar</a>  
                  </div>  
                </div>  
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <footer class="footer-section bg-dark text-white id="footer"">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta d-flex align-items-center">
                            <i class="fas fa-map-marker-alt fa-2x text-red mr-3"></i>
                            <div class="cta-text">
                                <h4>Encuéntranos</h4>
                                <span>Paseo Venecia. San Salvador, Soyapango</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta d-flex align-items-center">
                            <i class="fas fa-phone fa-2x text-red mr-3"></i>
                            <div class="cta-text">
                                <h4>Teléfono</h4>
                                <span>+503 6962-6839</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta d-flex align-items-center">
                            <i class="far fa-envelope-open fa-2x text-red mr-3"></i>
                            <div class="cta-text">
                                <h4>Correo</h4>
                                <span>ByteMexbusiness@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="../imagenes/BYTEMEX.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>¡Descubre los sabores auténticos de México en nuestro restaurante de comida mexicana! El sabor unico...</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Síguenos</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Enlaces de Interés</h3>
                            </div>
                            <ul>
                                <li><a href="#">Sobre nosotros</a></li>
                                <li><a href="#">Aviso Legal</a></li>
                                <li><a href="#">Menú</a></li>
                                <li><a href="#">Política de Privacidad</a></li>
                                <li><a href="#">Contáctanos</a></li>
                                <li><a href="#">Política de Cookies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Nuestros Horarios</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Visítanos de lunes a viernes de 8:00 am a 9:00 pm y los Sábados de 9:00 am a 6:00 pm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2024, All Right Reserved Anup</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">ByteMex es una marca registrada de restaurante.</a></li>
                                <li><a href="#">Prohíbido su uso sin autorización expresa.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </main>
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="{{ url('assets/js/bootstrap.min.js')}}"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="{{ url('assets2/js/menu.js')}}"></script>
</body>
</html>