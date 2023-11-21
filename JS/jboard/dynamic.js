$(document).ready(function() {
    // Cálculo de la anchura del deslizador
    var sliderWidth = 0;
    $('.info-block').each(function() {
        sliderWidth += $(this).outerWidth(true);
    });
    $('.slider').css('width', sliderWidth);

    // Deslizador
    var currentPosition = 0;
    var maxPosition = 0;
    var slideWidth = 200;
    var slides = $('.info-block').length;
    var minPosition = -((slides - 4) * slideWidth);

    $('.slider-container').on('click', '.arrow', function() {
        var direction = $(this).data('direction');
        if (direction == 'left') {
            if (currentPosition < 0) {
                currentPosition += slideWidth;
                $('.slider').css('transform', 'translateX(' + currentPosition + 'px)');
            }
        } else {
            if (currentPosition > minPosition) {
                currentPosition -= slideWidth;
                $('.slider').css('transform', 'translateX(' + currentPosition + 'px)');
            }
            if (currentPosition < maxPosition) {
                currentPosition += slideWidth;
                $('.slider').css('transform', 'translateX(' + currentPosition + 'px)');
            }
        }
    });
});