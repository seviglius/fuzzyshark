


jQuery(document).ready(function($){
	//if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
	var Query = 0;

	
	if($(window).width() > Query ) {
		var headerHeight = $('.header').height();
		$(window).on('scroll',
		{
	        previousTop: 0
	    }, 
	    function () {
		    var currentTop = $(window).scrollTop();
		    //check if user is scrolling up
		    if (currentTop < this.previousTop ) {
		    	//if scrolling up...
		    	if (currentTop > 0 && $('.header').hasClass('is-fixed')) {
		    		$('.header').addClass('visible');
		    	} else {
		    		$('.header').removeClass('visible is-fixed');
		    	}
		    } else {
		    	//if scrolling down...
		    	$('.header').removeClass('visible');
		    	if( currentTop > headerHeight && !$('.header').hasClass('is-fixed')) $('.header').addClass('is-fixed');
		    }
		    this.previousTop = currentTop;
		});
	}


$('.trigger').on('click', function(){
		$('.menu-icon').toggleClass('is-clicked'); 
		$('.header').toggleClass('menu-is-open');
		$(".menu-text").toggleClass('trigger-open-color');
		$('.primary-nav').toggleClass('visible');
	});

/*
	$('.trigger').on('click', function(){
		$('.menu-icon').toggleClass('is-clicked'); 
		$('.header').toggleClass('menu-is-open');
		$(".menu-text").toggleClass('trigger-open-color');

		
		if( $('.primary-nav').hasClass('visible') ) {
			$('.primary-nav').removeClass('visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').removeClass('overflow-hidden');
				//$(".menu-text").css({"color": "#fff"}, 200);
				//$(".menu-text").toggleClass('trigger-open-color');
			});
		} else {
			$('.primary-nav').addClass('visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').addClass('overflow-hidden');
				// $(".menu-text").animate({"color": "#433a97"});

			});	
		}
	});

*/
});

var $btns = $('.btn').click(function() {
  if (this.id == 'all') {
    $('#parent > div').fadeIn(450);
  } else {
    var $el = $('.' + this.id).fadeIn(450);
    $('#parent > div').not($el).hide();
  }
  $btns.removeClass('active');
  $(this).addClass('active');
})

