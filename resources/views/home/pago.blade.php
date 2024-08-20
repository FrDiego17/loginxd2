<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href={{ url('assets2/css/pago.css')}}>>
    <link rel="stylesheet" href={{ url('assets2/css/estilo.css')}}>
    <link rel="stylesheet" href={{ url('assets2/css/nav.css')}}>
    <title>Pago</title>
</head>

<body>
<nav class="navbar bg-body-tertiary navbar-expand-lg static-top">
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
                        <a class="nav-link active mx-lg-1" aria-current="page" href="/cart" data-translate="regresarCarri">Regresar al carrito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-lg-1" aria-current="page" href="/logout" data-translate="cerrar-sesion">Cerrar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-lg-1" aria-current="page" href="/home" data-translate="inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-lg-1" href="/menu" data-translate="menu">Menú</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-lg-1" href="/chat" data-translate="chat">Chat</a>
                    </li>
                     <li class="nav-item">
              <a class="nav-link active mx-lg-1" href="#">{{auth()->user()->username}}</a>
          </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="checkbox-wrapper-8 me-3">
                <input type="checkbox" id="cb3-8" class="tgl tgl-skewed" onclick="toggleLanguage()">
                <label for="cb3-8" data-tg-on="EN" data-tg-off="ES" class="tgl-btn"></label>
            </div>
    <div class="container-fluid background">
        <div class="row padding-top-20">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-8 offset-md-1 offset-lg-1 offset-xl-2 padding-horizontal-40">
                <div class="row">
                    <div class="col-12 main-wrapper">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div id="template" class="row panel-wrapper">
                                    <div class="col-12 panel-header basket-header">
                                        <div class="row">
                                            <div class="col-6 basket-title">
                                                <span class="description" data-translate="reviseSu">Revise su</span><br><span class="emphasized" data-translate="reviseSu2">Resumen de compra</span>
                                            </div>
                                            <div class="col-6 order-number text-end">
                                                <span class="description" data-translate="numeOrder">Numero de Orden</span><br><span class="emphasized">#00089</span>
                                            </div>
                                        </div>
                                        <div class="row column-titles padding-top-10">
                                            <div class="col-2 text-center"><span data-translate="foto">Foto</span></div>
                                            <div class="col-5 text-center"><span data-translate="nombree">Nombre</span></div>
                                            <div class="col-2 text-center"><span date_date_set-translate="cantidad">Cantidad</span></div>
                                            <div class="col-3 text-end"><span data-translate="preciu">Precio</span></div>
                                        </div>
                                    </div>
                                    <div class="col-12 panel-body basket-body">
                                        <div class="row product">
                                            <div class="col-2 product-image"><img src={{ url('assets2/img/hamburguesa_birria.png')}} class="img-fluid" alt="Product Image"></div>
                                            <div class="col-5">Hamburguesa de Birria<br><span class="additional">Combo de haamburguesa</span></div>
                                            <div class="col-2 text-end"><span class="sub" data-translate="uni">Unidad</span> Cant. 1</div>
                                            <div class="col-3 text-end"><span class="sub" data-translate="preciu">Precio<br></span>$7.50</div>
                                        </div>

                                        <div class="row product">
                                            <div class="col-2 product-image"><img src={{ url('assets2/img/tacos_pastor.png')}} class="img-fluid" alt="Product Image"></div>
                                            <div class="col-5">Tacos al Pastor<br><span class="additional">Orden de tacos al pastor</span></div>
                                            <div class="col-2 text-end"><span class="sub" data-translate="uni">Unidad</span> Cant. 1</div>
                                            <div class="col-3 text-end"><span class="sub" data-translate="preciu">Precio<br></span>$4.00</div>
                                        </div>

                                        <div class="row product">
                                            <div class="col-2 product-image"><img src={{ url('assets2/img/quesadilla_pollo.png')}} class="img-fluid" alt="Product Image"></div>
                                            <div class="col-5">Quesadilla de Pollo<br><span class="additional">Combo de Quesadilla</span></div>
                                            <div class="col-2 text-end"><span class="sub" data-translate="uni">Unidad</span> Cant. 1</div>
                                            <div class="col-3 text-end"><span class="sub" data-translate="preciu">Precio<br></span>$4.00</div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-12 panel-footer basket-footer">
                                        <hr>
                                        <div class="row">
                                            <div class="col-8 text-end description"><div class="dive">Subtotal</div></div>
                                            <div class="col-4 text-end"><span class="emphasized"></span>$15.50</div>
                                            <div class="col-8 text-end description"><div class="dive" data-translate="propi">Propina</div></div>
                                            <div class="col-4 text-end"><span class="emphasized"></span>$0.50</div>
                                            <div class="col-8 text-end description"><div class="dive" data-translate="shipment">Envío</div></div>
                                            <div class="col-4 text-end"><span class="emphasized"></span>$0.00</div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-8 text-end description"><div class="dive">Total</div></div>
                                            <div class="col-4 text-end"><span class="very emphasized">$16.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="row panel-wrapper">
                                    <div class="col-12 panel-header creditcard-header">
                                        <div class="row">
                                            <div class="col-12 creditcard-title">
                                                <span class="description" data-translate="tarjeta">Por favor ingrese su</span><br><span class="emphasized" data-translate="tarjeta2">Información de la Tarjeta</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 panel-body creditcard-body">
                                        <form action="#" method="post" target="_self">
                                            <fieldset>
                                                <label for="card-name" data-translate="tarjetanombre">Nombre en la Tarjeta</label><br>
                                                <i class="fa fa-user-o" aria-hidden="true"></i><input type='text' id='card-name' name='card-name' placeholder='Alejandra Carabantes' title='Name on the Card'>
                                            </fieldset>
                                            <fieldset>
                                                <label for="card-number" data-translate="tarjetanumero">Numero de la Tarjeta</label><br>
                                                <i class="fa fa-credit-card" aria-hidden="true"></i><input type='text' id='card-number' name='card-number' placeholder='1234 5678 9123 4567' title='Card Number'>
                                            </fieldset>
                                            <fieldset>
                                                <label for="card-expiration" data-translate="fechaEx">Fecha de expiración</label><br>
                                                <i class="fa fa-calendar" aria-hidden="true"></i><input type='text' id='card-expiration' name='card-expiration' placeholder='MM/YYYY' title='Expiration' class="card-expiration">
                                            </fieldset>
                                            <fieldset>
                                                <label for="card-ccv">CVC/CCV</label>&nbsp;<i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="The CVV Number on your credit card or debit card is a 3 digit number on VISA, MasterCard and Discover branded credit and debit cards. On your American Express branded credit or debit card it is a 4 digit numeric code."></i><br>
                                                <i class="fa fa-lock" aria-hidden="true"></i><input type='text' id='card-ccv' name='card-ccv' placeholder='123' title='CVC/CCV'>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="col-12 panel-footer creditcard-footer">
                                        <div class="row">
                                            <div class="col-12 text-end"><button class="btn btn-secondary cancel" data_translate="noquiero">Cancelar</button>&nbsp;<button class="btn btn-primary confirm" data-translate="confi">Confirmar y Pagar</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <script src="{{ url('assets2/js/translate.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz1U5a2vF3Bh/+8a2B6AhuP24HhHUHfNCMw5HBY/3Yov" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-qKJQ9H+Nf5Dk9QKp/EaTxq5fwwUSBS6VZh60c9b0RD5ViMXo0pygkS5xELgqFo4L" crossorigin="anonymous"></script>
</body>

</html>
