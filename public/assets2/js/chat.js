let session_stats = null;
$(document).ready(function() {
  var $messages = $('.messages-content'),
      d, h, m,
      i = 0;

  // Inicialización del scroll personalizado
  $messages.mCustomScrollbar();

  // Función para actualizar el scroll y llevarlo al fondo
  function updateScrollbar() {
      $messages.mCustomScrollbar("update").mCustomScrollbar('scrollTo', 'bottom', {
          scrollInertia: 10,
          timeout: 0
      });
  }

  // Función para establecer la fecha y hora del mensaje
  function setDate() {
      d = new Date();
      h = d.getHours();
      m = d.getMinutes();
      // Formato de hora con dos dígitos
      var time = h + ':' + (m < 10 ? '0' + m : m);
      // Añadir la hora al último mensaje
      $('.message:last .timestamp').text(time);
  }

  // Función para insertar un mensaje del usuario
  function insertUserMessage(msg) {
      if ($.trim(msg) == '') {
          return false;
      }
      $('<div class="message message-personal">' + msg + '<div class="timestamp"></div></div>').appendTo($('.mCSB_container')).addClass('new');
      setDate();
      updateScrollbar();
    //   setTimeout(function() {
    //       fakeMessage();
    //   }, 1000 + (Math.random() * 20) * 100);
  }

  // Función para insertar un mensaje del chatbot
  function insertChatbotMessage(msg) {
      $('<div class="message new"><figure class="avatar"><img src="' + avatarUrl + '" alt="Avatar"></figure>' + msg + '<div class="timestamp"></div></div>').appendTo($('.mCSB_container')).addClass('new');
      setDate();
      updateScrollbar();
  }

  // Manejador para el click en el botón de enviar mensaje
  $('.message-submit').click(async function() {
      await sendingMessage()
  });

  async function sendingMessage() {
    if(!session_stats) {
        const response = await axios.post('/init')
        session_stats = response.data
    }
    var msg = $('.message-input').val().trim();
    msg = msg.replace(/^\s+|\s+$/g, '')
    const msgResponse = await axios.post('/send', {
        session_id: session_stats.session_id,
        session_token: session_stats.session_token,
        msg
    })
    const {messages} = msgResponse.data
    insertUserMessage(msg);
      $('.message-input').val('');
    messages.forEach(msg => {
        $('<div class="message loading new"><figure class="avatar"><img src="' + avatarUrl + '" alt="Avatar"></figure><span></span></div>').appendTo($('.mCSB_container'));
        updateScrollbar();
        if(typeof msg === 'object' && msg.text) {
            setTimeout(function() {
                $('.message.loading').remove();
                insertChatbotMessage(msg.text);
                updateScrollbar();
            }, 1000 + (Math.random() * 20) * 100);
        }
    })
  }
  // Manejador para la tecla Enter en el input de mensaje
  $(window).on('keydown', async function(e) {
      if (e.which == 13) {
        await sendingMessage()
        //   return false;
      }
  });

  // Función para simular un mensaje falso del chatbot
  function fakeMessage() {
      $('<div class="message loading new"><figure class="avatar"><img src="' + avatarUrl + '" alt="Avatar"></figure><span></span></div>').appendTo($('.mCSB_container'));
      updateScrollbar();

      setTimeout(function() {
          $('.message.loading').remove();
          var randomIndex = Math.floor(Math.random() * Fake.length);
          insertChatbotMessage(Fake[randomIndex]);
          updateScrollbar();
      }, 1000 + (Math.random() * 20) * 100);
  }

  // Mensajes falsos del chatbot
  var Fake = [
      '¡Hola! Soy MexiBot. ¿En qué puedo ayudarte?',
      'Bienvenido, puedo ofrecerte algunos platillos si lo deseas',
      'Estoy aquí para ayudarte. ¿Qué necesitas?',
      '¿Cómo puedo asistirte hoy?',
      '¿En qué puedo orientarte?',
      'Estoy listo para responder tus preguntas. Adelante.',
      '¡Hola! ¿Cómo puedo ayudarte hoy?',
      '¿Qué tal? ¿En qué puedo colaborar?',
      '¿Necesitas asistencia? Estoy aquí para ayudarte.'
  ];

  // Mostrar mensaje inicial del chatbot al cargar la página
  setTimeout(function() {
      insertChatbotMessage(Fake[0]);
  }, 1000);
});
