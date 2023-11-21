var idioma = navigator.language;

// Verificar si el idioma es español
if (idioma.startsWith("es")) {
    // Cambio de contenido a español
    document.title = "XeCryptor - Registrarse";
    // Obtenemos el elemento p mediante su ID

	function cambiarContenido() {
		// Cambiamos su contenido HTML
		var contentp1 = "Registro";
		// Obtenemos el elemento p mediante su ID
		document.getElementById("signupheadtext").innerHTML = contentp1;
        
        var label0 = "Usuario:";
        document.getElementById("userpass_var_txt").innerHTML = label0
        var label1 = "Correo electrónico: ";
        document.getElementById("userpass_var_mail").innerHTML = label1;
        var label2 = "Contraseña: ";
        document.getElementById("userpasstext0").innerHTML = label2;
        var label3 = "Confirma tu contraseña: ";
        document.getElementById("userpasstext1").innerHTML = label3;
        var label4 = "Continuar";
        document.getElementById("sbut").innerHTML = label4

        
        var contentp2 = "¿Ya tiene una cuenta?: ";
        document.getElementById("loginbottom").innerHTML = contentp2;
        var contentp3 = "¿Contraseña olvidada?: ";
        document.getElementById("loginbottom2").innerHTML = contentp3;

        var contenta1 = "Inicie sesión";
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
    document.title = "XeCryptor - Signup";
}