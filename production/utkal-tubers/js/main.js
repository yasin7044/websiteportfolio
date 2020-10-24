jQuery.get("../zohaib.txt", function(data) {
  console.info(data);
});

/* Variety Slider */

$(function() {
  $(".variety-slider").slick({
    dots: true,
    appendDots: ".slider-dots",
    arrows: true,
    infinite: false,
    slidesToScroll: 2,
    slidesToShow: 3,
    accessibility: true,
    variableWidth: false,
    focusOnSelect: false,
    centerMode: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToScroll: 2,
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToScroll: 1,
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToScroll: 1,
          slidesToShow: 1,
        },
      },
    ],
  });
});

/* Testimonial */

$(".flipster").flipster({
  itemContainer: "ul",
  itemSelector: "li",
  start: "center",
  fadeIn: 400,
  loop: false,
  autoplay: false,
  pauseOnHover: true,
  style: "flat",
  spacing: -0.2,
  click: true,
  keyboard: true,
  scrollwheel: false,
  touch: true,
  nav: "after",
  buttons: false,
  buttonPrev: "Previous",
  buttonNext: "Next",
  onItemSwitch: false,
});

$(".quantity .quantity-field").inputSpinner();

var promoCode;
var coupons = {
  "10OFF": 10,
  ZOHAIB: 100,
  YASIN: 150,
};
var fadeTime = 300;
let shipping = 100;

$("#basket-shipping").text(shipping);

/* Assign actions */
$(".quantity input").keypress(e => e.preventDefault());

$(".quantity input").change(function() {
  updateQuantity(this);
});

$(".remove button").click(function() {
  removeItem(this);
});

$(document).ready(function() {
  updateSumItems();
});

var couponReq = false;

$(".promo-code-cta").click(function() {
  couponReq = true;
  promoCode = $("#promo-code")
    .val()
    .toUpperCase();
  $.each(coupons, function(index, value) {
    if (promoCode == index) {
      console.log(index + "right");
      $("div[for=promo-code].alert-danger").hide();
      $("div[for=promo-code].alert-success").show();
      $("li[for=promo-code]")
        .removeClass("d-none")
        .addClass("d-flex");
      $("li[for=promo-code] small").text(index);
      $("li[for=promo-code] .currency").text(value);
      var discountValue = value,
        couponReq = true;
      recalculateCart(true, discountValue, couponReq);
      return false;
    } else {
      couponReq = false;
      recalculateCart(true, discountValue, couponReq);
      $("div[for=promo-code].alert-success").hide();
      $("div[for=promo-code].alert-danger").show();
      $("li[for=promo-code]")
        .removeClass("d-flex")
        .addClass("d-none");
      console.log(index + "wrong");
    }
  });
});

/* Recalculate cart */
function recalculateCart(onlyTotal, discountValue, couponReq) {
  let subtotal = 0;

  /* Sum up row totals */
  $(".basket-product").each(function() {
    subtotal += parseFloat(
      $(this)
        .children(".subtotal")
        .text()
    );
  });

  /* Calculate totals */

  let total = subtotal;
  if (subtotal < 500) {
    shipping = 100;
    $("#basket-shipping").text(shipping);
    total = subtotal + shipping;
  } else {
    shipping = 0;
    $("#basket-shipping").text(shipping);
  }

  console.log(discountValue);
  //If there is a valid promoCode, and subtotal <= 500, subtract from total
  if (couponReq) {
    if (total <= 500) {
      total -= discountValue;
    } else {
      couponReq = false;
      recalculateCart(couponReq);
    }
  }

  /*If switch for update only total, update only total display*/
  if (onlyTotal) {
    /* Update total display */
    $(".total-value").fadeOut(fadeTime, function() {
      $("#basket-total").html(total.toFixed(2));
      $(".total-value").fadeIn(fadeTime);
    });
  } else {
    /* Update summary display. */
    $(".final-value").fadeOut(fadeTime, function() {
      $("#basket-subtotal").html(subtotal.toFixed(2));
      $("#basket-total").html(total.toFixed(2));
      $(".final-value").fadeIn(fadeTime);
      console.log(total);
    });
  }
}

/* Update quantity */
function updateQuantity(quantityInput) {
  /* Calculate line price */
  var productRow = $(quantityInput)
    .parent()
    .parent();
  var price = parseFloat(productRow.children(".price").text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;

  /* Update line price display and recalc cart totals */
  productRow.children(".subtotal").each(function() {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });

  productRow.find(".item-quantity").text(quantity);
  updateSumItems();
}

function updateSumItems() {
  let sumItems = 0;
  $(".quantity .input-group input").each(function() {
    sumItems += parseInt($(this).val());
  });
  $(".total-items").text(sumItems);
  recalculateCart(true);
}

/* Remove item from cart */
function removeItem(removeButton) {
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton)
    .parent()
    .parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
    updateSumItems();
  });
}

/* Add Address */

var addAddressBtn = $("#add-address-reveal");

addAddressBtn.click(function() {
  $(".add-address-form").slideDown(fadeTime);
  addAddressBtn.hide();
});

$("form#add-address-form").submit(function addNewAddress() {
  var firstName = $("#firstName").val();
  var lastName = $("#lastName").val();
  var fullName = firstName + " " + lastName;

  var contNo = $("#cont-no").val();

  var address = $("#address").val() + " ";
  address += $("#city").val() + " " + $("#zip").val() + " " + $("#state").val();

  $(".user-info__content")
    .last()
    .append(
      "<div class='custom-control custom-radio'>" +
        "<input id=address3 name=address type=radio class=custom-control-input checked required/>" +
        "<label class=custom-control-label for=address3>" +
        "<span id=name>" +
        fullName +
        "</span><span>" +
        contNo +
        "</span><address>" +
        address +
        "</address></label></div>"
    );
  $("form#add-address-form").remove();
});

/* Account */

var infoEditBtn = $("#accountInfoEdit");
var infoUpdateBtn = $("#accountInfoUpdate");

$(infoEditBtn).on("click", e => {
  e.preventDefault();
  $("input:disabled").prop("disabled", false);
  $(infoEditBtn).hide();
});

$("form#personalInfo").submit(e => {
  e.preventDefault();
  $("form#personalInfo input#userName")
    .text(this.value)
    .prop("disabled", true);
  $("form#personalInfo input#cont-no")
    .text(this.value)
    .prop("disabled", true);
  $("form#personalInfo input#email")
    .text(this.value)
    .prop("disabled", true);
  $(infoEditBtn).show();
});

/* Manage Addresses */

var editAddressBtn = $(".addressEdit");
var delAddressBtn = $(".addressDelete");

editAddressBtn.click(function() {
  $(".add-address-form").slideDown(fadeTime);
  editAddressBtn.hide();
  $(editAddressBtn)
    .parent()
    .hide();
});

delAddressBtn.click(function() {
  $(this)
    .parent()
    .remove();
});

$("input#rating__star").rating({
  filledStar: '<i class="fa fa-star green"></i>',
  emptyStar: '<i class="fa fa-star-o"></i>',
  containerClass: "",
  size: "sm",
  animate: true,
  displayOnly: false,
  rtl: false,
  showClear: false,
  showCaption: false,
  showCaptionAsTitle: false,
});

// $( "form#ratingInput" ).submit(function( event ) {
//   event.preventDefault();
// });

// function userStarInput() {
//   var userStars = $('input#rating__star').val();
//   $('#userStarInput').click(()=> {$('input[name=rating__count]').val(userStars)});
//   console.log(userStars);
// }
