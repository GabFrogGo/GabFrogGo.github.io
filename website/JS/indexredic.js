setTimeout(function() {
    var idioma = navigator.language;

    // Verificar si el idioma es español
    if (idioma.startsWith("es")) {
        // Redirigir a la página en español
        window.location.href = "./HTML/es/inicio.php";
    } else {
    // Redirigir a la página en inglés
        window.location.href = "./HTML/en/home.php";
    }
}, 3500);