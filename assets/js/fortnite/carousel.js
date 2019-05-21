$(document).ready(function () {

    var slideIndex = 0;
    var totalSlides = 2;

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

    $('.dot').on('click', function () {
        var slideId = parseInt($(this).data('slide'), 10);
        setSlideIndex(slideId);
    });

    $('.carousel').on('slide.bs.carousel', function (e) {
        slideIndex = e.to;
        var dots = document.getElementsByClassName("dot");
        var i;
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" dot-active", "");
        }
        dots[slideIndex].className += " dot-active";
    });

    // Thumbnail image controls
    function setSlideIndex(i) {
        $('.carousel').carousel(i);
    }
});
