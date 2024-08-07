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
@include('layouts.partials.navbar2')

  <section id="slider">
    <img src="{{ url('assets2/img/tacos_slider.jpeg')}}">
    <img src="{{ url('assets2/img/restaurante.png')}}">
    <img src="{{ url('assets2/img/burrito_slider.jpeg')}}"> 
    <img src="{{ url('assets2/img/restfuera.jpeg')}}">
    <img src="{{ url('assets2/img/personas.png')}}">
  </section>
  @auth
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
  @endauth

  @guest
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
  
  @endguest
  
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="{{ url('assets/js/bootstrap.min.js')}}"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="{{ url('assets2/js/menu.js')}}"></script>
</body>
</html>