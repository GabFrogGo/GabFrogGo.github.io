var detalles = document.getElementById('detalles');
  var resumen = document.getElementById('resumen');
  var pieDePagina = document.getElementById('pie-de-pagina');
  
  detalles.addEventListener('toggle', function() {
    if (detalles.open) {
      pieDePagina.style.position = 'relative';
      pieDePagina.style.bottom = '0';
    } else {
      pieDePagina.style.position = 'absolute';
      pieDePagina.style.bottom = '0';
      window.scrollTo(0, 0);
    }
  });