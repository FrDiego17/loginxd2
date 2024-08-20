<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ url('assets2/img/favicon.webp')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/indexjs.css')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/nav.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <title>Prueba</title>
</head>

<body>
    
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
   

   
  </body>
</html>




<script src="{{ url('assets2/js/calendario.js')}}"></script>
<script src="{{ url('assets2/js/translate.js')}}"></script>