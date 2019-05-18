$(document).ready(function () {

    if ($('.products-carousel').length) {

        if ($(document).width() >= 768) {
            $(".products-carousel").Cloud9Carousel({
                autoPlay: 1,
                bringToFront: true,
                xRadius: 400,
                yRadius: 100,
                autoPlayDelay: 10000
            });
        } else {
            var productsCarousel = $('.products-carousel').owlCarousel({
                margin: 30,
                items: 1,
                nav: true,
                navigationText: ['Y KAIRE','Y DESINE']
            });

            productsCarousel.find('.owl-stage').children().each( function( index ) {
                $(this).attr('data-position', index);
            });

            $(document).on('click', '.owl-item', function() {
                productsCarousel.trigger('to.owl.carousel', [$(this).data('position'), 500, true]); 
            });
        }

        $(document).on('click', '.product-button', function() {
            alert('Paspaudei buy');
        });
        console.log($(document).width());

        // var productsCarousel = $('.products-carousel').owlCarousel({
        //     center: true,
        //     loop: true,
        //     margin: 30,
        //     nav: true,
        //     navigationText: ['Y KAIRE','Y DESINE']
        // });

        // productsCarousel.find('.owl-stage').children().each( function( index ) {
        //     $(this).attr('data-position', index);
        // });

        // $(document).on('click', '.owl-item', function() {
        //     productsCarousel.trigger('to.owl.carousel', [$(this).data('position'), 500, true]); 
        // });
    }

});