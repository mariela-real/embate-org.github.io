function mostrarContenido(numero) {
    document.querySelectorAll('.content_page').forEach(function(content) {
      content.classList.remove('active');
    });

    document.getElementById('body_content' + numero).classList.add('active');

     document.querySelectorAll('button').forEach(function(button) {
        button.classList.remove('active');
      });
      document.getElementById('boton' + numero).classList.add('active');
  }

