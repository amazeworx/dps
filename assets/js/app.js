(() => {
  // resources/js/app.js
  jQuery(function($) {
    $("#mobilemenuToggle").on("click", function(event) {
      event.preventDefault;
      $(this).toggleClass("active");
      $("body").toggleClass("overflow-hidden");
      if ($(this).hasClass("active")) {
        $(this).removeClass("not-active");
      } else {
        $(this).addClass("not-active");
      }
      $("#mobilemenuDrawer").toggleClass("open");
    });
    $("#menu-mobile-menu .submenu-toggle").on("click", function(event) {
      $(this).toggleClass("open");
      $(this).closest(".menu-item").find(".sub-menu:first").slideToggle("slow", function() {
      });
    });
    var options = {
      offset: {
        up: 100,
        down: 50
      },
      tolerance: 10
    };
    $(".headroom").headroom(options);
  });
})();
