$(document).ready(function(){var o=$.cookie("cookietitle","yourvalue");null==o&&($(".se-pre-con").delay(3e3).fadeOut("slow"),$("body").css({overflow:"hidden"}).delay(3e3).css({overflow:"auto"}).css({"overflow-x":"hidden"})),jQuery.cookie("cookietitle")&&$(".se-pre-con").fadeOut("slow")}),$(document).ready(function(){$(".student-list").waypoint(function(o){"down"===o&&($(this.element).siblings().removeClass("in-range"),$(this.element).addClass("in-range"),console.log("60%, down")),"up"===o&&($(this.element).removeClass("in-range"),$(this.element).prev().addClass("in-range"),console.log("60%, up"))},{offset:"60%"}),$(".student-list:first-child").waypoint(function(o){"up"===o&&($(".student-list").removeClass("in-range"),console.log("60%, up"))},{offset:"60%"}),$(".student-list:last-child").waypoint(function(o){"down"===o&&($(this.element).removeClass("in-range"),console.log("remove last element")),"up"===o&&($(this.element).addClass("in-range"),console.log("bring back last element"))},{offset:"15%"}),$(".student-list").hover(function(){$(this).toggleClass("hovered"),$(this).siblings().toggleClass("in-range-overridden")}),$("#video-container").waypoint(function(o){"down"===o&&$("#logo").addClass("opacity-zero")},{offset:"-80%"}),$(".student-list:first-child").waypoint(function(o){"down"===o&&$("#logo").removeClass("opacity-zero")},{offset:"100%"}),$("#video-container").waypoint(function(o){"up"===o&&$("#logo").removeClass("opacity-zero")},{offset:"-100%"}),$(".student-list:first-child").waypoint(function(o){"up"===o&&$("#logo").addClass("opacity-zero")},{offset:"80%"});var o=$("#video-container"),s=o.outerHeight();$(document).scroll(function(){var e=(s-window.scrollY)/s;e>=50&&o.css("opacity",e)}),$(".module").waypoint(function(){$(this.element).find("p.caption").toggleClass("opacity-toggle")},{offset:"50%"}),$(".module").waypoint(function(){$(this.element).find("p.caption").toggleClass("opacity-toggle")},{offset:"-30%"}),$(".caption-alternate").waypoint(function(){$(this.element).toggleClass("opacity-toggle")},{offset:"70%"}),$(".caption-alternate").waypoint(function(){$(this.element).toggleClass("opacity-toggle")},{offset:"10%"}),$(".fitvid-container").fitVids(),$(".profile-header ").waypoint(function(){$(".profile-header").toggleClass("scroll-opacity")}),$(".profile-footer").waypoint(function(){$(".profile-header").toggleClass("scroll-opacity")})}),$(".single-design").find("#bottom-design-button").addClass("active"),$(".single-photography").find("#bottom-photo-button").addClass("active"),$(".single-design").find(".bottom-nav-design").css("display","block"),$(".single-design").find(".bottom-nav-photo").css("display","none"),$(".single-photography").find(".bottom-nav-design").css("display","none"),$(".single-photography").find(".bottom-nav-photo").css("display","block"),$("#bottom-design-button").click(function(){$(".bottom-nav-design").css("display","block"),$(".bottom-nav-photo").css("display","none"),$(this).addClass("active"),$(this).siblings().removeClass("active")}),$("#bottom-photo-button").click(function(){$(".bottom-nav-design").css("display","none"),$(".bottom-nav-photo").css("display","block"),$(this).addClass("active"),$(this).siblings().removeClass("active")}),$("#parent>div:nth-child(4n)").after('<div class="clearfix visible-all">'),$("#parent>.design").filter(function(o){return o%4==3}).after('<div class="clearfix visible-design">'),$("#parent>.photography").filter(function(o){return o%4==3}).after('<div class="clearfix visible-photo">'),$("#all").click(function(){$(".visible-all").css("display","block"),$(".visible-design").css("display","none"),$(".visible-photo").css("display","none")}),$("#design").click(function(){$(".visible-all").css("display","none"),$(".visible-design").css("display","block"),$(".visible-photo").css("display","none")}),$("#photography").click(function(){$(".visible-all").css("display","none"),$(".visible-design").css("display","none"),$(".visible-photo").css("display","block")}),jQuery(function($){$("h1,h2,h3,li,p").each(function(){$(this).html($(this).html().replace(/\s([^\s<]+)\s*$/,"&nbsp;$1"))})}),$(".single img").addClass("lazy"),$(".single iframe").addClass("lazy"),$("#comic-sans").click(function(){$("body").toggleClass("comic-sans")});