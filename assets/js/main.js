(function ($) {
    var filter = [];
    console.log($)
    $(document).on("click", ".filter-icon", function () {
        $(".filter").toogleClass("active");
    });
})(jQuery);