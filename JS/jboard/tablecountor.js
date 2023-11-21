document.addEventListener("DOMContentLoaded", function () {

var rows = document.querySelectorAll('.id-num');

    // Itera sobre cada fila y muestra el número correspondiente
    rows.forEach(function (row, index) {
        // Crea un elemento de número y añádelo a la fila
        var numberElement = document.createElement('div');
        numberElement.classList.add('row-number'); // Añade una clase para estilos opcionales
        numberElement.textContent = (index + 1);

        // Añade el número al principio de la fila
        row.insertBefore(numberElement, row.firstChild);
    });
});
