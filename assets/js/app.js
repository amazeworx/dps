(()=>{jQuery(function(e){e("#mobilemenuToggle").on("click",function(o){o.preventDefault,e(this).toggleClass("active"),e("body").toggleClass("overflow-hidden"),e(this).hasClass("active")?e(this).removeClass("not-active"):e(this).addClass("not-active"),e("#mobilemenuDrawer").toggleClass("open")}),e("#menu-mobile-menu .submenu-toggle").on("click",function(o){e(this).toggleClass("open"),e(this).closest(".menu-item").find(".sub-menu:first").slideToggle("slow",function(){})});var s={offset:{up:100,down:50},tolerance:10};e(".headroom").headroom(s)});})();
