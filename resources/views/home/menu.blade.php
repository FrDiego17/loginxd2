<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'ByteMex' }}</title>
    <link rel="stylesheet" href="{{ url('assets2/css/Style.css')}}">
    <link href="{{ url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="icon" href="../imagenes/favicon.webp">
    <link rel="stylesheet" href="{{ url('assets2/css/menu.css')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/nav.css')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/slider.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/beae16a269.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href={{ url('css/app.css') }}>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
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
              @foreach ($filtro[array_keys($filtro)[$i]] as $products)
                  <div class="carousel-item active">
                  <div class="container">
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <div class="card">
                            @if (isset($products->image))
                                <div class="imgBx">
                                    <img src="{{ asset('assets2/img/' . $products->image)}}">
                                </div>
                            @endif    
                            <div class="contentBx">  
                                <h2>{{$products->Nombre}}</h2>
                                <h2>Precio:</h2>
                                <h4 class="text-white-50">${{ $products->Precio }}</h4>

                                <input type="hidden" name="id" value="{{ $products->id_producto }}">
                                <input type="hidden" name="name" value="{{ $products->Nombre }}">
                                <input type="hidden" name="price" value="{{ $products->Precio }}">
                                <input type="hidden" name="img" value="{{ $products->image }}">
                                <input type="hidden" name="slug" value="{{ $products->slug ?? '' }}">
                                <input type="hidden" name="quantity" value="1">

                                <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                    <i class="fa fa-shopping-cart"></i> agregar al carrito
                                </button>
                            </div>
                        </div>
                    </form>
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>