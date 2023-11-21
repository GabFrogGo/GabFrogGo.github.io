var idioma = navigator.language;

// Verificar si el idioma es español
if (idioma.startsWith("es")) {
    // Cambio de contenido a español
    document.title = "XeCryptor - Iniciar sesión";
    // Obtenemos el elemento p mediante su ID

	function cambiarContenido() {
		// Cambiamos su contenido HTML
		var contentp1 = "Iniciar sesión";
		// Obtenemos el elemento p mediante su ID
		document.getElementById("loginheadtext2").innerHTML = contentp1;

        var label1 = "Correo electrónico: ";
        document.getElementById("usermailtext").innerHTML = label1;
        var label2 = "Contraseña: ";
        document.getElementById("userpass").innerHTML = label2;
        var label3 = "Continuar";
        document.getElementById("sbut").innerHTML = label3;

        
        var contentp2 = "¿No tiene una cuenta?: ";
        document.getElementById("loginbottom").innerHTML = contentp2;
        var contentp3 = "¿Contraseña olvidada?: ";
        document.getElementById("loginbottom2").innerHTML = contentp3;

        var contenta1 = "Registrarse";
        document.getElementById("a1").innerHTML = contenta1;
        var contenta2 = "Cliquea aquí";
        document.getElementById("a2").innerHTML = contenta2;
	}

    window.addEventListener("DOMContentLoaded", cambiarContenido);
		
	// Esperar a que se cargue la página antes de ejecutar la función cambiarContenido()
	window.onload = function() {
		cambiarContenido();
	};

} else {
    // Cambio de contenido a inglés
    document.title = "XeCryptor - Login";
}



/*function cambiarContenido() {
    // Obtenemos el elemento p mediante su ID
    var elemento = document.getElementById("mi-elemento");
    // Cambiamos su contenido HTML
    elemento.innerHTML = "¡Hola Mundo!";
}*/