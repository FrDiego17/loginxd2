@extends('layouts.app-master')

@section('content')

    @auth 
    <div class="container-fluid d-flex justify-content-center align-items-center texto-responsive">
            <div class="text-center">
                <p class="titulo1 mt-5">BYTEMEX</p>
                <p class="titulo2 ">EL SABOR DE LA MEJOR COMIDA MEXICANA </p>
            </div>
        </div>
        <div class="wall "></div>
        <div class="container-fluid">
            <img src="{{ url('assets2/img/cocina.jpg')}}" alt="Imagen de fondo" class="background-image img-fluid">
            <div class="content-overlay texto-responsive2">
                <p class="conoce">CONOCE SOBRE NOSOTROS</p>
                <div class="linea"></div>
                <p class="texto2">¡Descubre los sabores auténticos de México en nuestro restaurante de comida mexicana! Platos tradicionales,
                    ingredientes frescos y un ambiente acogedor te esperan. ¡Visítanos y disfruta de una experiencia culinaria única!</p>
            </div>
        </div>
        <div class="wall2"></div>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-center custom-red py-5" id="location">
                    <h2>DÓNDE ESTAMOS</h2>
                    <p>San Salvador</p>
                    <p>Soyapango</p>
                    <p>Paseo Venecia, 2do Nivel</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ url('assets2/img/bebida.jpg')}}" alt="drink" class="img-fluid">
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="{{ url('assets2/img/cocina.jpg')}}" alt="tacos" class="img-fluid">
                </div>
                <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-center custom-green py-5" id="order-now">
                    <h2>PIDE AHORA</h2>
                    <p>Lo mejor en comida Mexicana, pide aquí</p>
                    <button onclick="location.href='#'">
                        <span> Ver menú
                        </span>
                      </button>
                </div>
            </div>
    @endauth 

    @guest
        <div class="container-fluid d-flex justify-content-center align-items-center texto-responsive">
                <div class="text-center">
                    <p class="titulo1 mt-5">BYTEMEX</p>
                    <p class="titulo2 ">EL SABOR DE LA MEJOR COMIDA MEXICANA </p>
                </div>
            </div>
            <div class="wall "></div>
            <div class="container-fluid">
                <img src="{{ url('assets2/img/cocina.jpg')}}" alt="Imagen de fondo" class="background-image img-fluid">
                <div class="content-overlay texto-responsive2">
                    <p class="conoce">CONOCE SOBRE NOSOTROS</p>
                    <div class="linea"></div>
                    <p class="texto2">¡Descubre los sabores auténticos de México en nuestro restaurante de comida mexicana! Platos tradicionales,
                        ingredientes frescos y un ambiente acogedor te esperan. ¡Visítanos y disfruta de una experiencia culinaria única!</p>
                </div>
            </div>
            <div class="wall2"></div>
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-white d-flex flex-column justify-content-center align-items-center custom-red py-5" id="location">
                        <h2 class="pide">DÓNDE ESTAMOS</h2>
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
                        <h2 class="pide">PIDE AHORA</h2>
                        <p class="pide2">Lo mejor en comida Mexicana, pide aquí</p>
                        <button class="ui-btn" onclick="location.href='#'"">
                            <span>
                              Ver Menú 
                            </span>
                          </button>
                </div>
        </div>
        <footer class="footer-section bg-dark text-white id="footer">
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
                                    <a href="index.html"><img src="{{ url('assets2/img/BYTEMEX.png')}}" class="img-fluid" alt="logo"></a>
                                </div>
                                <div class="footer-text">
                                    <p class="textofoot">¡Descubre los sabores auténticos de México en nuestro restaurante de comida mexicana! El sabor unico...</p>
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
                                    <li><a href="#" class="textofoot">Sobre nosotros</a></li>
                                    <li><a href="#" class="textofoot">Aviso Legal</a></li>
                                    <li><a href="#" class="textofoot">Menú</a></li>
                                    <li><a href="#" class="textofoot">Política de Privacidad</a></li>
                                    <li><a href="#" class="textofoot">Contáctanos</a></li>
                                    <li><a href="#" class="textofoot">Política de Cookies</a></li>
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
                    </div>
                </div>
            </div>
        </footer>
    @endguest

@endsection 