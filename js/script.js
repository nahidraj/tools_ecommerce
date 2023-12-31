$(function () {
  ("use strict");

  // js for toggle menu
  $(".category-menu").on("click", function () {
    $(".mega-menu").toggleClass("show-mega-menu");
  })

  // Get all the menu_item elements
  const chooseListItems = document.querySelectorAll('.menu_item');

  // Add event listeners for hover
  chooseListItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      // Remove active class from all menu_item elements
      chooseListItems.forEach(listItem => {
        listItem.classList.remove('active');
      });
      // Add active class to the hovered element
      item.classList.add('active');
    });
  });

  // js for product table
  $(function () {
    $('.expandChildTable').on('click', function () {
      $(this).toggleClass('selected').closest('tr').next().toggle();
    })
  });

  // js for dropdown menu
  $('.sub-menu ul').hide();
  $(".sub-menu a").click(function () {
    $(this).parent(".sub-menu").children("ul").slideToggle("100");
    $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
  });

  // js for slider 
  $(".banner").slick({
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    dots: true,
    autoplay: true,
    arrows: false,
    slidesToScroll: 1,
    prevArrow: '<i class="fas left icon fa-chevron-left"></i>',
    nextArrow: '<i class="fas right icon fa-chevron-right"></i>',
    // responsive: [{
    //     breakpoint: 992,
    //     settings: {
    //       slidesToShow: 3,
    //     },
    //   },
    //   {
    //     breakpoint: 768,
    //     settings: {
    //       slidesToShow: 2,
    //     },
    //   },
    //   {
    //     breakpoint: 501,
    //     settings: {
    //       slidesToShow: 1,
    //     },
    //   },
    // ],
  });

  // Brands slider 
  $(".brands_slider").slick({
    infinite: true,
    speed: 500,
    slidesToShow: 6,
    dots: false,
    autoplay: true,
    arrows: true,
    slidesToScroll: 1,
    prevArrow: '<i class="fas left icon fa-chevron-left"></i>',
    nextArrow: '<i class="fas right icon fa-chevron-right"></i>',
    responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 5,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });


  $('.product-image-slider').slick({
    dots: true,
    arrows: false,
    customPaging: function (slick, index) {
      var targetImage = slick.$slides.eq(index).find('img').attr('src');
      return '<img src=" ' + targetImage + ' "/>';
    }
  });

  $(".mobile_search_option").on("click", function(){
    $(".search_overlay").toggleClass("navbar_overlay_active");
    $(".search_main_content").toggleClass("navbar_main_active");
  })
  $(".search_overlay").on("click", function(){
    $(".search_overlay").removeClass("navbar_overlay_active");
    $(".navbar_main_active").removeClass("navbar_main_active");
  })

  // foote menu js
  $(".mobile_category_menu").on("click", function(){
    $(".category_overlay").addClass("overlay_active");
    $(".main_menus").addClass("menu_active");
  })
  $(".category_overlay").on("click", function(){
    $(".category_overlay").removeClass("overlay_active");
    $(".main_menus").removeClass("menu_active");
  })

});