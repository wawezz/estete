(function ($) {
    var filter = [];

    $(document).on("click", ".filter-icon", function () {
        $(".filter").toggleClass("active");
    });

    $(document).on("change", ".filter-city", function () {
        console.log($(this).val());
    });
})(jQuery);