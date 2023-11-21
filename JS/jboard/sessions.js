// Obtener el valor de la variable de sesión
var sessionId = "<?php echo $_SESSION['user_id']; ?>";

// Hacer una solicitud AJAX para enviar el valor de sesión al servidor
$.ajax({
  //url: "process_session.php",
  url: "keycryptboard.php",
  type: "POST",
  data: { sessionId: sessionId },
  success: function(response) {
    // Mostrar la respuesta en una alerta
    alert(response);
  },
  error: function() {
    // Mostrar un mensaje de error en una alerta
    alert("Ha ocurrido un error al procesar la solicitud");
  }
});