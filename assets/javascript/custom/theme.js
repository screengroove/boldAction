
const candItems = $('.image-grid_item')
const membItems = $('.image-grid_sm')
const missionBlk = document.getElementsByClassName('mission-block');
const brandSwap = $('.nav-brand_swap');
const newsDeets = $('.news-grid_deets');
const bold = $('.hero-brand > *');
const headerMobile = $('.header-mobile');
const navMobile = $('.nav-mobile');
const navMobileLinks = $('.nav-mobile a');
const skrim = $('.skrim');
const facts = $('.fact');
const donate = $('#ribbon');
const circle = $('.circle');
const check = $('.check');
const postURL =
' https://boldpac.cp.bsd.net/page/sapi/homepage-signup?source=MS_HP_FR_2017.03.28_X_homepage_X__X__HP';
const isMobile = false;


if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
     isMobile = true;
     $('body').addClass('is-mobile')
}

/*==========  HERO ANIMATION ON LOAD  ==========*/
 window.setTimeout( () =>{
  bold.velocity("transition.expandIn", { stagger: 400 })
  skrim.velocity({ opacity: 0 }, { display: "none", delay: 1500 })
 }, 100);



/*==========  ADD STICKY HEADER ON SCROLL  ==========*/
var wrap = $(".nav-fixed");
$(window).scroll(function () {
  if ($(window).scrollTop() > 50) {
    wrap.addClass('is-sticky');
    headerMobile.addClass('is-sticky')
    donate.removeClass('white');
    brandSwap.attr("src","/wp-content/themes/FoundationPress/assets/images/nav_logo.png");

  } else {
    wrap.removeClass('is-sticky');
    headerMobile.removeClass('is-sticky')
    donate.addClass('white');
    brandSwap.attr("src","/wp-content/themes/FoundationPress/assets/images/nav_logo_lt.png");

  }
});

/*==========  OPEN CLOSE MOBILE MENU  ==========*/
$(".hamburger").click(function (e) {
  e.preventDefault();
  $(this).toggleClass("is-active");
  navMobile.toggleClass('open');
  if (navMobile.hasClass('open')) {
    navMobileLinks.velocity("transition.fadeIn", { stagger: 150, delay: 300 })
  } else {
     navMobileLinks.velocity("transition.fadeOut")
  }
});

/*==========  CLOSE MOBILE MENU ON LINK  ==========*/
$('.mobile-nav-lnks > a').click(function(){
  navMobile.removeClass('open');
  $(".hamburger").removeClass('is-active');
})


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

// Velocity Motion Effects
const slideInChildren = (target) =>{
  target.velocity("transition.slideUpBigIn", { stagger:100 })
}
const fadeInChildren = (target) => {
  target.velocity("transition.fadeIn", { stagger: 250 })
}




if (!isMobile) {
  // Slide in Animation for Members section
  $('#member-section').waypoint({
    handler: function (direction) {
      direction === 'down' &&
        slideInChildren(membItems)
      this.destroy();
    },
    offset: 500
  })

  // Slide in Animation for Candidate section
  $('#candidate-section').waypoint({
    handler: function (direction) {
      direction === 'down' &&
        slideInChildren(candItems)
      this.destroy();
    },
    offset: 500
  })
}//Mobile Check

// Slide in Animation for News section
$('#news-section').waypoint({
  handler: function (direction) {
    direction === 'down' &&
    slideInChildren(newsDeets)
    this.destroy();
  },
  offset: 500
})

// Slide in Animation for Fast Facts
$('#fast-facts').waypoint({
  handler: function (direction) {
    direction === 'down' &&
    slideInChildren(facts)
    this.destroy();
  },
  offset: 500
})

/*==========  Animate Success Check  ==========*/
function successCheck(el) {
  var closeCirc = el.find('.circle');
  var closeCheck = el.find('.check');
  closeCirc.velocity({
    strokeDashoffset: 0,
    strokeDasharray: 0
  },1500)
  closeCheck.velocity({
    strokeDashoffset: 900,
  },{duration: 3000, delay: 500})

}

/* jQuery Validate Emails with Regex */
function validateEmail(Email) {
    var pattern = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

    return $.trim(Email).match(pattern) ? true : false;
}

function validateZip(zip){
  var pattern = /^\d{5}$/

  return $.trim(zip).match(pattern) ? true : false;

}


/*==========  FORM SUBMISSION  ==========*/
$('.inline-form').submit(function (event) {
  event.preventDefault();
  const emailInput = event.target.email.value;
  const zipInput = event.target.zip.value;
  var submitBtn = $(this).find('button');
  var thisForm = $(this);


  if (!validateEmail(emailInput) ) {
    console.log("EMAIL", validateEmail(emailInput) )
    $(this).find('.errorEmail').addClass('has-error');
  } else if(!validateZip(zipInput) ){
    console.log("ZIP", validateZip(zipInput))
     $(this).find('.errorZip').addClass('has-error');
  } else {
    $.ajax({
      type: "POST",
      url: "https://boldpac.cp.bsd.net/page/sapi/homepage-signup?source=MS_HP_FR_2017.03.28_X_homepage_X__X__HP",
      data: { email: emailInput, zip: zipInput }
    })
    .done(function (data) {
      submitBtn.addClass('success')
      successCheck(thisForm);
    })
    .fail(function (data) {
      alert("error", data);
    })
  }//else

})
