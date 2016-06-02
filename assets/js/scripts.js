$( document ).ready(function() {

  $('.toggle-nav').on('click', function(e) {
    $('.menu').toggleClass("nav-open");
    e.preventDefault();
  });

});
