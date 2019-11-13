(function ($) {

    $(document).on("click", ".filter-icon", function () {
        $(".filter").toggleClass("active");
    });

    $(document).on("change", ".filter-city", function () {
        getProperties();
    });

    function getProperties() {
        var filter = $(".filter-city");

        filter.prop('disabled', 'disabled');

        var cities = filter.val();

        $.ajax({
            type: "POST",
            dataType: "html",
            url: the_ajax_script.ajaxurl,
            data: {
                cities: cities,
                action: 'get_proporties_ajax'
            },
            success: function (data) {
                // $(".properties-list").html(data);
                filter.prop('disabled', false);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
                filter.prop('disabled', false);
            }
        });
    }

    getProperties();
})(jQuery);