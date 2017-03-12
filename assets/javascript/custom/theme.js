
const candItems = $('.image-grid_item')


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

const slideInChildren = (target) =>{
  target.velocity("transition.slideUpBigIn", { stagger: 250 })
}



var waypoints = $('#candidate-section').waypoint({
  handler: function (direction) {
    direction === 'down' &&
    slideInChildren(candItems)
    this.destroy();
  },
  offset: 200
})




