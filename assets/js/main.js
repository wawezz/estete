(function ($) {

    $(document).on("click", ".filter-icon", function () {
        $(".filter").toggleClass("active");
    });

    $(document).on("change", ".filter-city", function () {
        $(this).prop('disabled', 'disabled');

        var cities = $(this).val();

        $.ajax({
            type: "POST",
            dataType: "html",
            url: the_ajax_script.ajaxurl,
            data: {
                cities: cities,
                action: 'get_proporties_ajax'
            },
            success: function (data) {
                console.log(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }

        });

        $(this).prop('disabled', false);
    });
})(jQuery);