$(document).ready(function () {
    skinCategoryChanged();

    // scroll to selected menu element
    $('.navlinks li').find('a').on('click', function(){
        var divToScroll = $(this).attr('href');
        $('html,body').animate({
            scrollTop: $(divToScroll).offset().top
        });
    });

    $('.categoryBtn').on('click', function(){
        skinCategoryChanged();
    });

    $('.product-button').on('click', function() {
        $('#modal-product-id').val($(this).val())
    });

    var slideIndex = 0;

    initCardCarousel();

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

    $('.skinned-carousel').slick({
        focusOnSelect:true,
        centerMode: true,
        slidesToShow: 3,
        dots: true,
        centerPadding: 0,

        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    // Thumbnail image controls
    function setSlideIndex(i) {
        $('.carousel').carousel(i);
    }

    // function to determine which skin to show. We are showing div id by radio button value.
    function skinCategoryChanged() {
        $("input[name='skinCategory']").each(function(index, element) {
            var elementToHideId = $(element).val();
            $('#' + elementToHideId).hide();
        });

        var elementToShowId = $("input[name='skinCategory']:checked").val();
        $('#' + elementToShowId).show();

        initCardCarousel();
    }

    function initCardCarousel() {
        $(".products-carousel").Cloud9Carousel({
            autoPlay: 1,
            bringToFront: true,
            xRadius: 400,
            yRadius: 100,
            autoPlayDelay: 10000,
            speed: 10
        });
    }

});
