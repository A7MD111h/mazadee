$(document).ready(function () {
  $(window).on("load", function () {
    $(".img-loader").fadeOut("hide");
  });

  // Navbar move //
  $(window).scroll(function (e) {
    if ($(window).scrollTop() > 0) {
      $(".header-bottom").css({
        "background": "linear-gradient(0deg, rgba(199,199,199,1) 0%, rgba(255,255,255,1) 50%)",
        "box-shadow":" 0 8px 6px -6px black",
        top: "0",
      });
    } else {
      $(".header-bottom").css({
        "background": "#fff",
        "box-shadow": "0 0px 0px 0px black",
        top: "30px",
      });
    }
  });
  // ----- //

  // Navbar responsive //
  if ($(".header-bottom").length) {
    $(".navbar-toggler").click(function () {
      if ($(".navbar-toggler-icon").hasClass("fa-bars")) {
        $("body").css("overflow", "hidden");
        $(".navbar-toggler-icon").removeClass("fa-bars").addClass("fa-times");
      } else {
        $(".navbar-toggler-icon").removeClass("fa-times").addClass("fa-bars");
        $("body").css("overflow", "scroll");
        $(".dropdown").find(".hover-menu").slideUp();
      }
    });

    $(".search-nav .icon").click(function () {
      $(this).next().slideToggle("slow");
    });
  }
  // ----- //

  // Owl carousel 2//
  if ($(".slider .owl-carousel").length) {
    $(".slider .owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 5,
        },
        1199: {
          items: 6,
        },
      },
    });
    $(".slider .owl-carousel .owl-prev")(
      '<i class="flaticon-left-arrow"></i>'
    );
    $(".slider .owl-carousel .owl-next")(
      '<i class="flaticon-right-arrow"></i>'
    );
  }

  if ($(".real-estate-slider .owl-carousel").length) {
    $(".real-estate-slider .owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: true,
      items: 1,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
    });
    $(".real-estate-slider .owl-carousel .owl-prev")(
      '<i class="flaticon-left-arrow"></i>'
    );
    $(".real-estate-slider .owl-carousel .owl-next")(
      '<i class="flaticon-right-arrow"></i>'
    );
    var i = 1;
    $(".real-estate-slider .owl-carousel .owl-dot").each(function (e) {
      $(this)("<span>" + i + "</span>");
      i++;
    });
  }

  if ($(".customers-slider").length) {
    $(".customers-slider .owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      dots: false,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2,
        },
        1000: {
          items: 3,
        },
      },
    });
  }
  // ----- //

  // jQuery countdown //
  if ($(".time").length) {
    $(function () {
      $("[data-countdown]").each(function () {
        var $this = $(this),
          finalDate = $(this).data("countdown");
        $this.countdown(finalDate, function (event) {
          $this(event.strftime("%Dd: %Hh: %Mm: %Ss"));
        });
      });
    });
  }
  // ----- //

  // Back To Top button //
  if ($(".back-to-top").length) {
    $(window).scroll(function (e) {
      var scroll = $(window).scrollTop();
      if (scroll > 450) {
        $(".back-to-top").addClass("show");
      } else {
        $(".back-to-top").removeClass("show");
      }
    });

    $(".back-to-top").click(function (e) {
      $("html, body").animate(
        {
          scrollTop: $("html").offset().top,
        },
        1000
      );
    });
  }
  // ----- //

  // countTo.js and move-start
  if ($(".my-bids").length) {
    if ($(".my-bids").hasClass("start")) {
      $(".timer").countTo();
      $(".my-bids").removeClass("start");
    }
  }

  if ($("#business-counter").length) {
    $(window).scroll(function (e) {
      if ($(window).scrollTop() >= 400) {
        if ($("#business-counter").hasClass("start")) {
          $(".timer").countTo();
          $("#business-counter").removeClass("start");
        }
      }
    });
  }

  if ($(".details-content").length) {
    $(window).scroll(function (e) {
      if ($(window).scrollTop() >= 590) {
        if ($(".items-area").hasClass("start")) {
          $(".timer").countTo();
          $(".items-area").removeClass("start");
        }
      }
    });
  }
  // ----- //

  //Slick Sliders //
  if ($(".details-slider").length) {
    $(".slider-for").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      asNavFor: ".slider-nav",
    });
    $(".slider-nav").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: ".slider-for",
      centerMode: true,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ],
    });
  }
  // ----- //

  // Frequently Asked Questions Hide/Show //
  if ($("#questions").length) {
    $(".faq-title").click(function () {
      $(this).next().slideToggle();
      $(this).parent().toggleClass("open");
    });
  }
  // ----- //

  if ($("#login").length || $("#register").length) {
    $(".show-password").click(function () {
      if ($("#password").attr("type") == "password") {
        $("#password").attr("type", "text");
      } else {
        $("#password").attr("type", "password");
      }
    });
    $("#show-confirm-password").click(function () {
      if ($("#password-comfirm").attr("type") == "password") {
        $("#password-comfirm").attr("type", "text");
      } else {
        $("#password-comfirm").attr("type", "password");
      }
    });
  }
});

$(window).on("load", function () {
  $(".img-loader").fadeOut("slow");
});
