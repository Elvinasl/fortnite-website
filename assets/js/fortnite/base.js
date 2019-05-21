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

    // function to determine which skin to show. We are showing div id by radio button value.
    function skinCategoryChanged() {
        $("input[name='skinCategory']").each(function(index, element) {
            var elementToHideId = $(element).val();
            $('#' + elementToHideId).hide();
        });

        var elementToShowId = $("input[name='skinCategory']:checked").val();
        $('#' + elementToShowId).show();
    }

});
