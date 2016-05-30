$( document ).ready(function() {

$('.student-list').waypoint(function() {
  $(this.element).toggleClass("in-range");
 }, { offset: '5%'
});

$('.student-list').waypoint(function() {
  $(this.element).toggleClass("in-range");
 }, { offset: '60%'
});

// $('.student-list').not('in-range').hover(function(){
//   $(this).toggleClass("hovered");
//   //$(".in-range").toggleClass("in-range-overridden");
//   $(".in-range").toggleClass("in-range");
// });

// $('.student-list').not('.in-range').hover(function(){
//   $(this).toggleClass("hovered");
//   $('.in-range').toggleClass('in-range');
// });

$('.scca-student-name').hover(function(){
  $(this).toggleClass("hovered");
  $('.in-range').toggleClass('in-range-overridden');
});
// $('.scca-student-name').mouseout(function(){
//   $(this).removeClass("hovered");
//   $('.in-range').toggleClass('in-range-overridden');
// });

$('#school-name').waypoint(function() {
  $('#logo').toggleClass("opacity-zero");
});

var target = $('#video-container');
var targetHeight = target.outerHeight();

$(document).scroll(function(){
    var scrollPercent = (targetHeight - window.scrollY) / targetHeight;
    if(scrollPercent >= 50){
        target.css('opacity', scrollPercent);
    }
});

$(".module").waypoint(function() {
  $(this.element).find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '50%'
});

$(".module").waypoint(function() {
  $(this.element).find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '-30%'
});


//responsive videos
$(".fitvid-container").fitVids();

$(".profile-header ").waypoint(function() {
  $(".profile-header").toggleClass("scroll-opacity");
});

$(".profile-footer").waypoint(function() {
  $(".profile-header").toggleClass("scroll-opacity");
});

// var $window = $(window),
//        $stickyEl = $('.profile-header'),
//        elTop = $stickyEl.offset().top;

//    $window.scroll(function() {
//         $stickyEl.toggleClass('.scroll-opacity', $window.scrollTop() > elTop);
//         // $('#student-url').toggleClass('.scroll-opacity', $window.scrollTop() > elTop);
//     });

});



///Slow down the scroll speed on the student rolodex
// if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
// window.onmousewheel = document.onmousewheel = wheel;

// function wheel(event) {
//     var delta = 0;
//     if (event.wheelDelta) delta = event.wheelDelta / 12;
//     else if (event.detail) delta = -event.detail / 3;

//     handle(delta);
//     if (event.preventDefault) event.preventDefault();
//     event.returnValue = false;
// }

// function handle(delta) {
//     var time = 1;
//   var distance = 3;
    
//     $('html, slowSpeed').stop().animate({
//         scrollTop: $(window).scrollTop() - (distance * delta)
//     }, time );
// }
