
const candItems = $('.image-grid_item')
const membItems = $('.image-grid_sm')
const missionBlk = document.getElementsByClassName('mission-block');
const donateBtn = $('.btn-donate > img').attr('src')
const pathSegment = $('.btn-donate > img').attr('src').split( '/' );
const newsDeets = $('.news-grid_deets');
const bold = $('.hero-brand > *');
const skrim = $('.skrim');
const facts = $('.fact');
const donate = $('.ribbon')


/*==========  HERO ANIMATION ON LOAD  ==========*/
//bold.velocity("transition.slideUpBigIn", 2000)


 window.setTimeout( () =>{   
  bold.velocity("transition.expandIn", { stagger: 400 })
  skrim.velocity({ opacity: 0 }, { display: "none", delay: 1500 })
 }, 1000);


/*==========  ADD STICKY HEADER ON SCROLL  ==========*/
var wrap = $(".nav-fixed");
$(window).scroll(function () {
  if ($(window).scrollTop() > 50) {
    wrap.addClass('is-sticky');
    donate.removeClass('white');

  } else {
    wrap.removeClass('is-sticky');
    donate.addClass('white');

  }
});

// Scroll to page segment
$('a[href*=#]:not([href=#])').click(function () {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top - 100
      }, 1000);
      return false;
    }
  }
});

const slideInChildren = (target) =>{
  target.velocity("transition.slideUpBigIn", { stagger: 250 })
}
const fadeInChildren = (target) => {
  target.velocity("transition.fadeIn", { stagger: 250 })
}



$('#candidate-section').waypoint({
  handler: function (direction) {
    direction === 'down' &&
    slideInChildren(candItems)
    this.destroy();
  },
  offset: 300
})

// Slide in Animation for Members section
$('#member-section').waypoint({
  handler: function (direction) {
    direction === 'down' &&
    slideInChildren(membItems)
    this.destroy();
  },
  offset: 300
})

// Slide in Animation for News section
$('#news-section').waypoint({
  handler: function (direction) {
    direction === 'down' &&
    slideInChildren(newsDeets)
    this.destroy();
  },
  offset: 300
})

// Slide in Animation for Fast Facts
$('#fast-facts').waypoint({
  handler: function (direction) {
    direction === 'down' &&
    slideInChildren(facts)
    this.destroy();
  },
  offset: 300
})



//  $(window).on('scroll', function () {
//     var scrollTop     = $(window).scrollTop(),
//         elementOffset = $('.mission-block').offset().top,
//         distance      = (elementOffset - scrollTop);

//      $('#mission-section').css('opacity', (scrollTop / 700) ) 

// });






