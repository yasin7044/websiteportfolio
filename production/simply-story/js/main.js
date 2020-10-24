/* Hero Slider */

$(function() {
  $(".hero-slider").slick({
    dots: true,
    appendDots: ".slider-dots",
    arrows: true,
    infinite: true,
    slidesToScroll: 1,
    slidesToShow: 1,
    accessibility: true,
    variableWidth: false,
    adaptiveHeight: true,
    focusOnSelect: false,
    centerMode: false,
    autoplay: true,
    autoplaySpeed: 300
  });
});

const story = $("div.story-container");
const sidebar = $("div.sidebar");

$(document).ready(function() {
  // Description
  // let description = $(".description");
  // description.text(function(index, currentText) {
  //   return currentText.substr(0, 900) + '...';
  // });

  // Toggle Sidebar in story
  $("#sidebar-toggle").on("click", function(e) {
    e.preventDefault();
    $(sidebar).toggleClass("hide");
    $(story)
      .toggleClass("col-md-12")
      .toggleClass("col-md-9");
  });

  // if($(window).scrollTop() > $('.blur-cover').height()) {
  //   sidebar.toggleClass('fix-me')
  // }
});

$(window).scroll(function(){

  // when scroll to bottom of the page
  var scrollHeight = $(document).height();
	var scrollPosition = $(window).height() + $(window).scrollTop();
	let scrollFromBottom = scrollHeight - scrollPosition;
  if(story.offset().top && $(window).scrollTop() > $('.blur-cover').height() && scrollFromBottom > $('.footer').height()) {
    sidebar.addClass('fix-me')
  }
  else {
    sidebar.removeClass('fix-me')
  }
})

