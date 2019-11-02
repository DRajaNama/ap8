//Slider JS//
$('.hero-slide').owlCarousel({
  loop:true,
  margin:0,
  nav:true,
dots:true,
slideBy: 1,
thumbs: true,
thumbsPrerendered: true,
autoplay:false,
autoplayTimeout:3000,
autoplayHoverPause:true,
  responsive:{
      0:{items:1},
  480:{items:1},
      767:{items:1},
  992:{items:1},
      1200:{items:1}
  }
})


$('.machine-slide').owlCarousel({
  loop:false,
  navRewind: false,
  margin:30,
  nav:true,
dots:false,
slideBy: 4,
thumbs: true,
thumbsPrerendered: true,
autoplay:true,
autoplayTimeout:3000,
autoplayHoverPause:true,
responsive:{
  0:{
    items:1,
    slideBy: 1
  },
  480:{
    items:2,
    slideBy: 2
  },
  767:{
    items:3,
    slideBy: 3
  },
  992:{
    items:3,
    slideBy: 3
  },
  1200:{
    items:4,
    slideBy: 4
  }
 }
})

$('.mm-slide').owlCarousel({
  loop:false,
  navRewind: false,
  margin:0,
  nav:true,
  dots:false,
  slideBy: 4,
  thumbs: true,
  thumbsPrerendered: true,
  autoplay:true,
  autoplayTimeout:3000,
  autoplayHoverPause:true,
  responsive:{
    0:{
      items:1,
      slideBy: 1
    },
    480:{
      items:2,
      slideBy: 2
    },
    767:{
      items:3,
      slideBy: 3
    },
    992:{
      items:3,
      slideBy: 3
    },
    1200:{
      items:4,
      slideBy: 4
    }
   }
})

$('.preffered-partner-slider').owlCarousel({
  loop:true,
  navRewind: false,
  margin:0,
  nav:false,
dots:false,
slideBy: 1,
thumbs: true,
thumbsPrerendered: true,
autoplay:true,
items:5,
autoplayTimeout:3000,
autoplayHoverPause:true,
  responsive:{
      0:{items:1},
  480:{items:2},
      767:{items:3},
  992:{items:4},
      1200:{items:5}
  }
})

$('.team-road-slider').owlCarousel({
  loop:true,
  navRewind: false,
  margin:15,
  nav:true ,
  dots:false,
  slideBy: 1,
  thumbs: true,
  thumbsPrerendered: true,
  autoplay:true,
  items:4,
  autoplayTimeout:3000,
  autoplayHoverPause:true,
    responsive:{
        0:{items:1},
    680:{items:1},
    767:{items:2},
    992:{items:3},
        1200:{items:4}
    }
  })

//Header
$(document).on('scroll', function() {
   if ($(document).scrollTop() > 0) {
      $('.header').addClass('nav-shrink');
   } else {
      $('.header').removeClass('nav-shrink');
   }
});


// Add slideDown animation to Bootstrap dropdown when expanding.
$('.dropdown').hover(function(){
  $('.dropdown-toggle', this).trigger('click');
});

$('.dropdown').on('show.bs.dropdown', function() {
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown('fast');
});

// Add slideUp animation to Bootstrap dropdown when collapsing.
$('.dropdown').on('hide.bs.dropdown', function() {
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(50);
});


//backtotop//
$(document).ready(function(){
	// hide #back-top first
	$("#back-top").hide();
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});


//thumbslider
$(document).ready(function() {
  $('.owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    dots: true,
    nav:true,
    focusOnSelect: true,
    dotsContainer: '.testimonial-slider-nav .thumbs'
  });
});


$(function(){
  SyntaxHighlighter.all();
});
$(window).load(function(){
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 320,
    itemMargin: 30,
    asNavFor: '#slider'
  });

  $('#slider').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel",
    start: function(slider){
      $('body').removeClass('loading');
    }
  });
});

//AnimationjQuery(document).ready(function() {
jQuery('.animate1').addClass("hidden").viewportChecker({
  classToAdd: 'visible animated slideInDown',
  offset: 100
});
jQuery('.animate2').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated slideInLeft',
    offset: 100
});
jQuery('.animate3').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated slideInRight',
    offset: 100
});
jQuery('.animate4').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeIn',
    offset: 100
});
jQuery('.animate5').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInUp',
    offset: 100
});
jQuery('.animate6').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInDown',
    offset: 100
});
jQuery('.animate7').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInLeft',
    offset: 100
});
jQuery('.animate8').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInRight',
    offset: 100
});
jQuery('.animate9').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInUpBig',
    offset: 100
});
jQuery('.animate10').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeInDownBig',
    offset: 100
});
