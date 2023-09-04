$(function () {
  ("use strict");

  // js for toggle menu
  $(".category-menu").on("click", function () {
    $(".mega-menu").toggleClass("show-mega-menu");
  })

  const menuItems = document.querySelectorAll('.list-unstyled li');

  // menuItems.forEach((item) => {
  //   item.addEventListener('mouseenter', () => {
  //     // Remove the 'active' class from all menu items
  //     menuItems.forEach((menuItem) => {
  //       menuItem.classList.remove('active');
  //     });

  //     // Add the 'active' class to the hovered menu item
  //     item.classList.add('active');
  //   });
  // });


  // Get all the choose--list elements
  const chooseListItems = document.querySelectorAll('.menu_item');

  // Add event listeners for hover
  chooseListItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      // Remove active class from all choose--list elements
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
    autoplay: false,
    arrows: false,
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