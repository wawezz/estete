(function($) {
  $(document).on("click", ".filter-icon", function() {
    $(".filter").toggleClass("active");
  });

  $(document).on("change", ".filter-city", function() {
    getProperties();
  });

  function getProperties() {
    var filter = $(".filter-city");

    filter.prop("disabled", "disabled");
    $(".loading-spin").show();
    var cities = filter.val();

    $.ajax({
      type: "POST",
      dataType: "html",
      url: the_ajax_script.ajaxurl,
      data: {
        cities: cities,
        action: "get_proporties_ajax"
      },
      success: function(data) {
        $(".properties-list").html(data);
        filter.prop("disabled", false);
        $(".loading-spin").hide();
      },
      error: function(jqXHR, textStatus, errorThrown) {
        $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        filter.prop("disabled", false);
        $(".loading-spin").hide();
      }
    });
  }

  if ($(".posts-list-wrapper")) {
    var type = $(".posts-list-wrapper").data();
    console.log(type);
    if (type == "properties") {
      console.log(2);
      getProperties();
    }
  }
})(jQuery);
