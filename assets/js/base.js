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

    // function to determine which skin to show. We are showing div id by radio button value.
    function skinCategoryChanged() {
        $("input[name='skinCategory']").each(function(index, element) {
            var elementToHideId = $(element).val();
            $('#' + elementToHideId).hide();
        });

        var elementToShowId = $("input[name='skinCategory']:checked").val();
        $('#' + elementToShowId).show();
    }


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
    }

});
