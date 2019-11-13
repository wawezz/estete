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

  var wrapper = $(document + " .posts-list-wrapper");

  if (wrapper) {
    var ptype = wrapper.data("ptype");
    console.log(ptype);
    if (ptype == "properties") {
      console.log(2);
      getProperties();
    }
  }
})(jQuery);
