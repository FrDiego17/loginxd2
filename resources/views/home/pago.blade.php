<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href={{ url('assets2/css/pago.css')}}>
    <link rel="stylesheet" href={{ url('assets2/css/estilo.css')}}>
    <link rel="stylesheet" href={{ url('assets2/css/nav.css')}}>
    <title>Pago</title>
</head>

<body>
<nav class="navbar bg-body-tertiary navbar-expand-lg static-top">
    <!-- Navbar content -->
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
                                            <span class="description" data-translate="reviseSu">Revise su</span><br>
                                            <span class="emphasized" data-translate="reviseSu2">Resumen de compra</span>
                                        </div>
                                        <div class="col-6 order-number text-end">
                                            <span class="description" data-translate="numeOrder">Numero de Orden</span><br>
                                            <span class="emphasized">#00089</span>
                                        </div>
                                    </div>
                                    <div class="row column-titles padding-top-10">
                                        <div class="col-2 text-center"><span data-translate="foto">Foto</span></div>
                                        <div class="col-5 text-center"><span data-translate="nombree">Nombre</span></div>
                                        <div class="col-2 text-center"><span data-translate="cantidad">Cantidad</span></div>
                                        <div class="col-3 text-end"><span data-translate="preciu">Precio</span></div>
                                    </div>
                                </div>
                                
                                <div class="card1">
                                    @foreach($cartCollection as $item)
                                        <div class="col-12 panel-body basket-body" style="min-height: 5%;">
                                            <div class="row product" style="height: 50%">
                                                <div class="col-2 product-image">
                                                    <img src="{{ url('assets2/img/' . $item->attributes->image) }}" class="img-fluid" alt="Product Image">
                                                </div>
                                                <div class="col-5">
                                                    {{ $item->name }}<br>
                                                    <span class="additional">{{ $item->attributes->description }}</span>
                                                </div>
                                                <div class="col-2 text-end">
                                                    <span class="sub" data-translate="uni">Unidad</span> Cant. {{ $item->quantity }}
                                                </div>
                                                <div class="col-3 text-end">
                                                    <span class="sub" data-translate="preciu">Precio<br></span>${{ $item->price }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                
                                <div class="col-12 panel-footer basket-footer">
                                    <hr>
                                    <div class="row">
                                        <div class="col-8 text-end description"><div class="dive">Subtotal</div></div>
                                        <div class="col-4 text-end"><span class="emphasized">${{ \Cart::getSubTotal() }}</span></div>
                                        <div class="col-8 text-end description"><div class="dive" data-translate="propi">Propina</div></div>
                                        <div class="col-4 text-end"><span class="emphasized">$0.00</span></div>
                                        <div class="col-8 text-end description"><div class="dive" data-translate="shipment">Envío</div></div>
                                        <div class="col-4 text-end"><span class="emphasized">$0.00</span></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-8 text-end description"><div class="dive">Total</div></div>
                                        <div class="col-4 text-end"><span class="very emphasized">${{ \Cart::getTotal() }}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="row panel-wrapper">
                                <div class="col-12 panel-header creditcard-header">
                                    <div class="row">
                                        <div class="col-12 creditcard-title">
                                            <span class="description" data-translate="tarjeta">Por favor ingrese su</span><br>
                                            <span class="emphasized" data-translate="tarjeta2">Información de la Tarjeta</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 panel-body creditcard-body" style="max-height: 500px;">
                                    <form action="{{ route('payment.success') }}" method="post" target="_self">
                                        @csrf
                                        <fieldset>
                                            <label for="card-name" data-translate="tarjetanombre">Nombre en la Tarjeta</label><br>
                                            <i class="fa fa-user-o" aria-hidden="true"></i>
                                            <input type='text' id='card-name' name='card-name' placeholder='Alejandra Carabantes' title='Name on the Card'>
                                        </fieldset>
                                        <fieldset>
                                            <label for="card-number" data-translate="tarjetanumero">Numero de la Tarjeta</label><br>
                                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                                            <input type='text' id='card-number' name='card-number' placeholder='1234 5678 9123 4567' title='Card Number'>
                                        </fieldset>
                                        <fieldset>
                                            <label for="card-expiration" data-translate="fechaEx">Fecha de expiración</label><br>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <input type='text' id='card-expiration' name='card-expiration' placeholder='MM/YYYY' title='Expiration' class="card-expiration">
                                        </fieldset>
                                        <fieldset>
                                            <label for="card-ccv">CVC/CCV</label>&nbsp;
                                            <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="The CVV Number on your credit card or debit card is a 3 digit number on VISA, MasterCard and Discover branded credit and debit cards. On your American Express branded credit or debit card it is a 4 digit numeric code."></i><br>
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                            <input type='text' id='card-ccv' name='card-ccv' placeholder='123' title='CVC/CCV'>
                                        </fieldset>

                                        <div class="col-12 panel-footer creditcard-footer">
                                            <div class="row">
                                                <div class="botones" >
                                                    <a class="btn" href="menu">
                                                        CANCELAR
                                                    </a>
                                                    
                                                    <button type="submit" style="font-size: 15px; " class="btn btn-primary confirm" data-translate="confi" id="confirmationpayment">Confirmar y Pagar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
    <script src="{{ url('assets2/js/pago.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz1U5a2vF3Bh/+8a2B6AhuP24HhHUHfNCMw5HBY/3Yov" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QLg+zVe+QMQBPeihbPu+K1MFcdm2n0CwfFgP0LJp3E+b35iw4wBfClvv1+1ydpXd" crossorigin="anonymous"></script>
</body>

</html>
