@auth
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
        <div class="sliderInicio">
            <div class="indicator"></div>
            <div id="demo"></div>
            <div class="details" id="details-even">
            <div class="place-box">
                <div class="text textoIndex"></div>
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
            </div>
            <div class="slide-numbers" id="slide-numbers"></div>
        </div>
        <div class="cover" ></div>
        <div class="container-fluid"></div>    
    </div>
@endauth

@guest
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
                                    <a class="nav-link active mx-lg-1" aria-current="page" href="/login" data-translate="Inicio-Sesión">Inicio de Sesión</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active mx-lg-1" href="/menu" data-translate="menu">Menú</a>
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
                </div>
            </nav>
        </header>
        <div class="sliderInicio">
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
                <div class="title-box-2"><div class="title-2 ">BYTEMEX</div></div>
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
            </div>
            <div class="slide-numbers" id="slide-numbers"></div>
        </div>
        <div class="cover" ></div>
        <div class="container-fluid"></div>    
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-end my-4">
            <div class="checkbox-wrapper-8">
                <input type="checkbox" id="cb3-8" class="tgl tgl-skewed" onclick="toggleLanguage()">
                <label for="cb3-8" data-tg-on="EN" data-tg-off="ES" class="tgl-btn"></label>
            </div>
        </div>
    </div>  
@endguest

