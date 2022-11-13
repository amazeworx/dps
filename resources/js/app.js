//import 'tw-elements';
// Navigation toggle
// window.addEventListener('load', function () {
//   let main_navigation = document.querySelector('#primary-menu');
//   document
//     .querySelector('#primary-menu-toggle')
//     .addEventListener('click', function (e) {
//       e.preventDefault();
//       main_navigation.classList.toggle('hidden');
//     });
// });
// grab an element
//var myElement = document.querySelector('headroom');
// construct an instance of Headroom, passing the element
//var headroom = new Headroom(myElement);
// initialise
//headroom.init();

jQuery(function ($) {
  // Mobile Menu
  $('#mobilemenuToggle').on('click', function (event) {
    event.preventDefault;
    $(this).toggleClass('active');
    $('body').toggleClass('overflow-hidden');
    if ($(this).hasClass('active')) {
      $(this).removeClass('not-active');
    } else {
      $(this).addClass('not-active');
    }
    $('#mobilemenuDrawer').toggleClass('open');
  });
  $('#menu-mobile-menu .submenu-toggle').on('click', function (event) {
    $(this).toggleClass('open');
    $(this)
      .closest('.menu-item')
      .find('.sub-menu:first')
      .slideToggle('slow', function () {
        // Animation complete.
      });
  });

  var options = {
    // vertical offset in px before element is first unpinned
    //offset: 0,
    // or you can specify offset individually for up/down scroll
    offset: {
      up: 100,
      down: 50,
    },
    // scroll tolerance in px before state changes
    tolerance: 10,
    // or you can specify tolerance individually for up/down scroll
    // tolerance: {
    //   up: 50,
    //   down: 50,
    // },
  };

  $('.headroom').headroom(options);
});
