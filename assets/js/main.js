(function($) {
  $(document).on("click", ".filter-icon", function() {
    $(".filter").toggleClass("active");
  });

  $(document).on("change", ".filter-city", function() {
    getProperties();
  });
})(jQuery);

function getProperties() {
  var filter = $(".filter-city");

  filter.prop("disabled", "disabled");
  jQuery(".loading-spin").show();
  var cities = filter.val();

  jQuery.ajax({
    type: "POST",
    dataType: "html",
    url: the_ajax_script.ajaxurl,
    data: {
      cities: cities,
      action: "get_proporties_ajax"
    },
    success: function(data) {
      jQuery(".properties-list").html(data);
      filter.prop("disabled", false);
      jQuery(".loading-spin").hide();
    },
    error: function(jqXHR, textStatus, errorThrown) {
      $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
      filter.prop("disabled", false);
      jQuery(".loading-spin").hide();
    }
  });
}
