@extends('layouts.app-master')

@section('content')
    
    @auth
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-end my-4">
                <div class="checkbox-wrapper-8">
                    <input type="checkbox" id="cb3-8" class="tgl tgl-skewed" onclick="toggleLanguage()">
                    <label for="cb3-8" data-tg-on="EN" data-tg-off="ES" class="tgl-btn"></label>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center align-items-center texto-responsive">
           <div class="sliderin">
            <div class="indicator"></div>
    
            <div id="demo"></div>
        
            <div class="details" id="details-even">
              <div class="place-box">
                <div class="text"></div>
              </div>
              <div class="title-box-1"><div class="title-1"></div></div>
              <div class="title-box-2"><div class="title-2">BYTEMEX</div></div>
              <div class="desc">
                "¡Descubre el auténtico sabor de México en cada bocado! Ven y prueba nuestros deliciosos platillos." 
              </div>
              
            </div>
        
            <div class="details" id="details-odd">
              <div class="place-box">
                <div class="text"></div>
              </div>
              <div class="title-box-1"><div class="title-1"></div></div>
              <div class="title-box-2"><div class="title-2">BYTEMEX</div></div>
              <div class="desc">
                <h1>Disfruta de auténticos sabores mexicanos con ingredientes frescos y seleccionados especialmente para ti.</h1>
              </div>
        
            </div>
        
            <div class="pagination" id="pagination">
              <div class="arrow arrow-left">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 19.5L8.25 12l7.5-7.5"
                  />
                </svg>
              </div>
              <div class="arrow arrow-right">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.25 4.5l7.5 7.5-7.5 7.5"
                  />
                </svg>
              </div>
              <div class="progress-sub-container" >
                <div class="progress-sub-background" >
                    <div class="progress-sub-foreground" ></div>
                </div>
            </div>
            <div class="slide-numbers" id="slide-numbers"></div>
            </div>
        
            <div class="cover" ></div>
           </div>
        </div>
        <div class="wall"></div>
        <div class="container-fluid">
            <img src="{{ url('assets2/img/cocina.jpg')}}" alt="Imagen de fondo" class="background-image img-fluid">
            <div class="content-overlay texto-responsive2">
                <p class="conoce" data-translate="conoce">CONOCE SOBRE NOSOTROS</p>
                <div class="linea"></div>
                <p class="texto2" data-translate="texto2">¡Descubre los sabores auténticos de México en nuestro restaurante de comida mexicana! Platos tradicionales,
                    ingredientes frescos y un ambiente acogedor te esperan. ¡Visítanos y disfruta de una experiencia culinaria única!</p>
            </div>
        </div>
        <div class="wall2"></div>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-center custom-red py-5" id="location">
                    <h2 class="pide" data-translate="donde-estamos">DÓNDE ESTAMOS</h2>
                    <p class="pide2">San Salvador</p>
                    <p class="pide2">Soyapango</p>
                    <p class="pide2">Paseo Venecia, 2do Nivel</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ url('assets2/img/bebida.jpg')}}" alt="drink" class="img-fluid">
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="{{ url('assets2/img/tacos.jpg')}}" alt="tacos" class="img-fluid">
                </div>
                <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-center custom-green py-5" id="order-now">
                    <h2 class="pide" data-translate="pide-ahora">PIDE AHORA</h2>
                    <p class="pide2" data-translate="pide2">Lo mejor en comida Mexicana, pide aquí</p>
                    <button class="ui-btn" onclick="location.href='#'">
                        <span data-translate="ver-menu">Ver menú</span>
                      </button>
                </div>
            </div>
    @endauth 

    @guest
        <div class="container-fluid d-flex justify-content-center align-items-center texto-responsive">
               
            </div>
            <div class="wall"></div>
            <div class="container-fluid">
                <img src="{{ url('assets2/img/cocina.jpg')}}" alt="Imagen de fondo" class="background-image img-fluid">
                <div class="content-overlay texto-responsive2">
                    <p class="conoce" data-translate="conoce">CONOCE SOBRE NOSOTROS</p>
                    <div class="linea"></div>
                    <p class="texto2" data-translate="texto2">¡Descubre los sabores auténticos de México en nuestro restaurante de comida mexicana! Platos tradicionales,
                        ingredientes frescos y un ambiente acogedor te esperan. ¡Visítanos y disfruta de una experiencia culinaria única!</p>
                </div>
            </div>
            <div class="wall2"></div>
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-center custom-red py-5" id="location">
                        <h2 class="pide" data-translate="donde-estamos">DÓNDE ESTAMOS</h2>
                        <p class="pide2">San Salvador</p>
                        <p class="pide2">Soyapango</p>
                        <p class="pide2">Paseo Venecia, 2do Nivel</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ url('assets2/img/bebida.jpg')}}" alt="drink" class="img-fluid">
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="{{ url('assets2/img/tacos.jpg')}}" alt="tacos" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-center custom-green py-5" id="order-now">
                        <h2 class="pide" data-translate="pide-ahora">PIDE AHORA</h2>
                        <p class="pide2" data-translate="pide2">Lo mejor en comida Mexicana, pide aquí</p>
                        <button class="ui-btn" onclick="location.href='/menu'">
                            <span data-translate="ver-menu">Ver Menú</span>
                          </button>
                </div>
        </div>
        
    @endguest

    <!-- Botones para cambiar el idioma -->
 
    <script src="{{ url('assets2/js/calendario.js')}}"></script>
    <script src="{{ url('assets2/js/translate.js')}}"></script>
@endsection



