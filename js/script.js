$(function () {
  ("use strict");

  $(function () {
    $('.expandChildTable').on('click', function () {
      $(this).toggleClass('selected').closest('tr').next().toggle();
    })
  });

  $('.sub-menu ul').hide();
  $(".sub-menu a").click(function () {
    $(this).parent(".sub-menu").children("ul").slideToggle("100");
    $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
  });

  $(".banner").slick({
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    dots: true,
    autoplay: false,
    arrows:false,
    slidesToScroll: 1,
    prevArrow: '<i class="fas left icon fa-chevron-left"></i>',
    nextArrow: '<i class="fas right icon fa-chevron-right"></i>',
    responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 501,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});