$(document).ready(function () {

    $(".products-carousel").Cloud9Carousel({
        autoPlay: 1,
        bringToFront: true,
        xRadius: 400,
        yRadius: 100,
        autoPlayDelay: 10000,
        speed: 10
    });

    $('.carousel').carousel({
        interval: false,
    });

    $('#buy-modal-next-btn').on('click', function () {
        $('.carousel').carousel('next');
    });


    $('#buy-modal-back-btn').on('click', function () {
        $('.carousel').carousel('prev');
    });

});
