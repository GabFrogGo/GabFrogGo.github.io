//Copy Functions//
//Copy Filename
document.addEventListener('DOMContentLoaded', function () {
    // Selecciona todos los íconos de copiar
    const copyIcons = document.querySelectorAll('.copy-icon');

    // Agrega un controlador de eventos a cada ícono
    copyIcons.forEach(function (icon) {
        icon.addEventListener('click', function () {
            // Encuentra la celda de la misma fila que contiene el valor a copiar
            const cellToCopy = icon.closest('tr').querySelector('.value-cell');

            // Obtiene el texto a copiar
            const textToCopy = cellToCopy.textContent;

            // Copia el contenido de la celda al portapapeles
            navigator.clipboard.writeText(textToCopy)
                .then(function () {
                    // Realiza acciones después de copiar, como mostrar una notificación
                    alert('Texto copiado al portapapeles: ' + textToCopy);
                })
                .catch(function (error) {
                    console.error('Error al copiar al portapapeles:', error);
                    // Maneja el error, por ejemplo, mostrando un mensaje de error al usuario
                });
        });
    });
});
//Copy Ext.

//Copy Key

//View Key//

//Edit Fn//

//Delete Row//