if($('body').hasClass("home")){
    $(".se-pre-con").delay(3000).fadeOut("slow");
    setTimeout(function(){ $('body').css('overflow-y','auto'); },3000);
  }
else {
  $(".se-pre-con").hide();
}

$( document ).ready(function() {

// $('.student-list').waypoint(function(direction) {
//   if (direction === 'up') {
//   $(this.element).siblings().removeClass('in-range');
//   $(this.element).addClass("in-range");
//   console.log('5%, up');
// }
//  }, { offset: '5%'
// });



$('.student-list').waypoint(function(direction) {
  if (direction === 'down') {
  $(this.element).siblings().removeClass('in-range');
  $(this.element).addClass("in-range");
  console.log('60%, down');
}
 if (direction === 'up') {
  $(this.element).removeClass('in-range');
  $(this.element).prev().addClass("in-range");
  console.log('60%, up');
}
 }, { offset: '60%'
});

$('.student-list:first-child').waypoint(function(direction) {
  if (direction === 'up') {
  $('.student-list').removeClass('in-range');
  console.log('60%, up');
}
 }, { offset: '60%'
});

$('.student-list:last-child').waypoint(function(direction) {
  if (direction === 'down') {
  $(this.element).removeClass('in-range');
  console.log('remove last element');
}
if (direction === 'up') {
  $(this.element).addClass('in-range');
  console.log('bring back last element');
}
 }, { offset: '15%'
});

$('.student-list').hover(function(){
  $(this).toggleClass("hovered");
  $(this).siblings().toggleClass('in-range-overridden');
});

$('#video-container').waypoint(function(direction) {
  if (direction === 'down') {
  $('#logo').addClass("opacity-zero");
}
}, { offset: '-80%'
});

$('.student-list:first-child').waypoint(function(direction) {
  if (direction === 'down') {
  $('#logo').removeClass("opacity-zero");
}
}, { offset: '100%'
});

$('#video-container').waypoint(function(direction) {
  if (direction === 'up') {
  $('#logo').removeClass("opacity-zero");
}
}, { offset: '-100%'
});

$('.student-list:first-child').waypoint(function(direction) {
  if (direction === 'up') {
  $('#logo').addClass("opacity-zero");
}
}, { offset: '80%'
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

$(".caption-alternate").waypoint(function() {
  $(this.element).toggleClass("opacity-toggle");
 }, { offset: '70%'
});

$(".caption-alternate").waypoint(function() {
  $(this.element).toggleClass("opacity-toggle");
 }, { offset: '10%'
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


$('.single-design').find("#bottom-design-button").addClass("active");
$('.single-photography').find("#bottom-photo-button").addClass("active");

$('.single-design').find(".bottom-nav-design").css("display", "block");
$('.single-design').find(".bottom-nav-photo").css("display", "none");
$('.single-photography').find(".bottom-nav-design").css("display", "none");
$('.single-photography').find(".bottom-nav-photo").css("display", "block");

$('#bottom-design-button').click(function(){
  $(".bottom-nav-design").css("display", "block");
  $(".bottom-nav-photo").css("display", "none");
  $(this).addClass("active");
  $(this).siblings().removeClass("active");
});

$('#bottom-photo-button').click(function(){
  $(".bottom-nav-design").css("display", "none");
  $(".bottom-nav-photo").css("display", "block");
  $(this).addClass("active");
  $(this).siblings().removeClass("active");
});

// $('#parent>div:nth-child(4n)').after('<div class="clearfix visible-all">');
// $('#parent>.design:nth-child(4n)').after('<div class="clearfix visible-design">');
// $('#parent>.photography:nth-child(4n)').after('<div class="clearfix visible-photo">');

$('#parent>div:nth-child(4n)').after('<div class="clearfix visible-all">');

$('#parent>.design').filter(function(index){
 return (index%4 == 3);
}).after('<div class="clearfix visible-design">');

$('#parent>.photography').filter(function(index){
 return (index%4 == 3);
}).after('<div class="clearfix visible-photo">');

$('#all').click(function() {
  $('.visible-all').css('display', 'block');
  $('.visible-design').css('display', 'none');
  $('.visible-photo').css('display', 'none');
});
$('#design').click(function() {
  $('.visible-all').css('display', 'none');
  $('.visible-design').css('display', 'block');
  $('.visible-photo').css('display', 'none');
});
$('#photography').click(function() {
  $('.visible-all').css('display', 'none');
  $('.visible-design').css('display', 'none');
  $('.visible-photo').css('display', 'block');
});

// auto runt control
jQuery(function($) {
    $('h1,h2,h3,li,p').each(function() {
        $(this).html($(this).html().replace(/\s([^\s<]+)\s*$/,'&nbsp;$1'));
    });
});

// add class of lazy to all single imgs
$(".single img").addClass("lazy");
$(".single iframe").addClass("lazy");
// Comic Sans easter egg 
$('#comic-sans').click(function(){
  $('body').toggleClass("comic-sans");
});