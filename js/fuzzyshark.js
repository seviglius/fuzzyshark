$( document ).ready(function() {

$(".name").each(function(i) {

$('#name-' + (i + 1)).waypoint(function() {
  $("#featured-project-image-" + (i + 1)).toggle();
  $("#name-" + (i + 1)).toggleClass("underlined");
 }, { offset: '30%'
});

$('#name-' + (i + 1)).waypoint(function() {
  $("#featured-project-image-" + (i + 1)).toggle();
  $("#name-" + (i + 1)).toggleClass("underlined");
 }, { offset: '55%'
});

});


var target = $('#video-container');
var targetHeight = target.outerHeight();

$(document).scroll(function(){
    var scrollPercent = (targetHeight - window.scrollY) / targetHeight;
    if(scrollPercent >= 50){
        target.css('opacity', scrollPercent);
    }
});
  
$(".module:nth-of-type(3)").addClass("module-3");
$(".module:nth-of-type(4)").addClass("module-4");
$(".module:nth-of-type(5)").addClass("module-5");
$(".module:nth-of-type(6)").addClass("module-6");
$(".module:nth-of-type(7)").addClass("module-7");
$(".module:nth-of-type(8)").addClass("module-8");
$(".module:nth-of-type(9)").addClass("module-9");
$(".module:nth-of-type(10)").addClass("module-10");

$(".module-3").waypoint(function() {
  $(".module-3").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '50%'
});

$(".module-3").waypoint(function() {
  $(".module-3").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '-30%'
});

$(".module-4").waypoint(function() {
  $(".module-4").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '50%'
});

$(".module-4").waypoint(function() {
  $(".module-4").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '-30%'
});

$(".module-5").waypoint(function() {
  $(".module-5").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '30%'
});

$(".module-5").waypoint(function() {
  $(".module-5").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '-30%'
});

$(".module-6").waypoint(function() {
  $(".module-6").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '30%'
});

$(".module-6").waypoint(function() {
  $(".module-6").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '-30%'
});

$(".module-7").waypoint(function() {
  $(".module-7").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '30%'
});

$(".module-7").waypoint(function() {
  $(".module-7").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '-30%'
});

$(".module-8").waypoint(function() {
  $(".module-8").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '30%'
});

$(".module-8").waypoint(function() {
  $(".module-8").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '-30%'
});

$(".module-9").waypoint(function() {
  $(".module-9").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '30%'
});

$(".module-9").waypoint(function() {
  $(".module-9").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '-30%'
});

$(".module-10").waypoint(function() {
  $(".module-10").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '30%'
});

$(".module-10").waypoint(function() {
  $(".module-10").find("p.caption").toggleClass("opacity-toggle");
 }, { offset: '-30%'
});


});