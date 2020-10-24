$(document).ready(function() {
  var $nav = $("nav.fixed-top");

  let $btn = $("button.navbar-toggler");
  $btn.on("click", function() {
    let $menu = $(".navbar-collapse.collapse");
    if ($menu.hasClass("show")) {
      navBgTransparent();
    } else {
      navBgWhite();
    }
  });

  $btnTrig = $btn.attr("aria-expanded");

  function navBgWhite() {
    $nav.addClass("navbar-light bg-light");
    $nav.removeClass("navbar-dark bg-dark");
    $nav.css("box-shadow", "0 2px 35px rgba(0, 0, 0, 0.2)");
  }

  function navBgTransparent() {
    $nav.removeClass("navbar-light bg-light");
    $nav.addClass("navbar-dark bg-dark");
    $nav.css("box-shadow", "none");
  }

  $(document).scroll(function() {
    if ($(window).scrollTop() <= $nav.height()) {
      navBgTransparent();
      console.log($btnTrig);
    } else {
      console.log("i am next");
      navBgWhite();
    }
	});
	
	$(".modal .cover").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: false
  });
});

$(".flipster").flipster({
  itemContainer: "ul",
  // [string|object]
  // Selector for the container of the flippin' items.

  itemSelector: "li",
  // [string|object]
  // Selector for children of `itemContainer` to flip

  start: "center",
  // ['center'|number]
  // Zero based index of the starting item, or use 'center' to start in the middle

  fadeIn: 400,
  // [milliseconds]
  // Speed of the fade in animation after items have been setup

  loop: false,
  // [true|false]
  // Loop around when the start or end is reached

  autoplay: false,
  // [false|milliseconds]
  // If a positive number, Flipster will automatically advance to next item after that number of milliseconds

  pauseOnHover: true,
  // [true|false]
  // If true, autoplay advancement will pause when Flipster is hovered

  style: "flat",
  // [coverflow|carousel|flat|...]
  // Adds a class (e.g. flipster--coverflow) to the flipster element to switch between display styles
  // Create your own theme in CSS and use this setting to have Flipster add the custom class

  spacing: -0.2,
  // [number]
  // Space between items relative to each item's width. 0 for no spacing, negative values to overlap

  click: true,
  // [true|false]
  // Clicking an item switches to that item

  keyboard: true,
  // [true|false]
  // Enable left/right arrow navigation

  scrollwheel: false,
  // [true|false]
  // Enable mousewheel/trackpad navigation; up/left = previous, down/right = next

  touch: true,
  // [true|false]
  // Enable swipe navigation for touch devices

  nav: "after",
  // [true|false|'before'|'after']
  // If not false, Flipster will build an unordered list of the items
  // Values true or 'before' will insert the navigation before the items, 'after' will append the navigation after the items

  buttons: false,
  // [true|false|'custom']
  // If true, Flipster will insert Previous / Next buttons with SVG arrows
  // If 'custom', Flipster will not insert the arrows and will instead use the values of `buttonPrev` and `buttonNext`

  buttonPrev: "Previous",
  // [text|html]
  // Changes the text for the Previous button

  buttonNext: "Next",
  // [text|html]
  // Changes the text for the Next button

  onItemSwitch: false
  // [function]
  // Callback function when items are switched
  // Arguments received: [currentItem, previousItem]
});