<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ByteMex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="{{ url('assets2/img/favicon.webp')}}">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets2/css/chat.css')}}">
    <link rel="stylesheet" href="{{ url('assets2/css/interfaz.css')}}">
    <script>
        var avatarUrl = "{{ url('assets2/img/Mexibot.png') }}";
    </script>
</head>
<body>
@include('layouts.partials.navbar')
  
  <div class="chat">
    <div class="chat-title">
      <h1>Mexibot</h1>
      <h2>Asistente personal</h2>
        <figure class="avatar">
             <img src="{{ url('assets2/img/Mexibot.png')}}" alt="Avatar">
        </figure>
    </div>
    <div class="messages">
      <div class="messages-content"></div>
    </div>
    <div class="message-box">
      <textarea type="text" class="message-input" placeholder="Escribe un mensaje..."></textarea>
      <button type="submit" class="message-submit">Enviar</button>
    </div>
  </div>
  
  
  <!-- jQuery (cargado antes del script.js) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <!-- Bootstrap Bundle JS (incluye Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- jQuery Custom Scrollbar (mCustomScrollbar) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="{{ url('assets2/js/chat.js')}}"></script>
</body>
</html>
