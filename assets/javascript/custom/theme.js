

/*==========  ADD STICKY HEADER ON SCROLL  ==========*/
var wrap = $(".nav-fixed");
$(window).scroll(function () {
  if ($(window).scrollTop() > 50) {
    wrap.addClass('is-sticky');
  } else {
    wrap.removeClass('is-sticky');
  }
});

// Scroll to page segment
$('a[href*=#]:not([href=#])').click(function () {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  }
});

// $.scrollIt({
//   upKey: 38,             // key code to navigate to the next section
//   downKey: 40,           // key code to navigate to the previous section
//   easing: 'linear',      // the easing function for animation
//   scrollTime: 600,       // how long (in ms) the animation takes
//   activeClass: 'active', // class given to the active nav element
//   onPageChange: null,    // function(pageIndex) that is called when page is changed
//   topOffset: 0           // offste (in px) for fixed top navigation
// });

$.scrollIt();