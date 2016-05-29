$( document ).ready(function() {

$('.student-list').waypoint(function() {
  $(this.element).toggleClass("in-range");
 }, { offset: '30%'
});

$('.student-list').waypoint(function() {
  $(this.element).toggleClass("in-range");
 }, { offset: '55%'
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

$('.student-list').hover(function(){
  $(this).toggleClass("hovered");
  $('.in-range').toggleClass('in-range-overridden');
});

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

$(".project-header").waypoint(function() {
  $("#student-name").toggleClass("scrolled-name");
});

var $window = $(window),
       $stickyEl = $('#student-name'),
       elTop = $stickyEl.offset().top;

   $window.scroll(function() {
        $stickyEl.toggleClass('sticky', $window.scrollTop() > elTop);
        $('#student-name').toggleClass('.scroll-opacity', $window.scrollTop() > elTop);
    });

});
