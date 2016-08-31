$( document ).ready(function() {

  // menu dropdown
  $('.toggle-nav').on('click', function(e) {
    $('.header-container').toggleClass("nav-open");
    e.preventDefault();
  });

  // add/remove header-scrolled class to header on scroll
  var header = $(".header-container");
  var headerScrolledClass = "header-scrolled";
  $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll <= 0) {
          header.removeClass(headerScrolledClass);
      } else {
          header.addClass(headerScrolledClass);
      }
  });

});
