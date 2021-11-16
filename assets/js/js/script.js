$(document).ready(function () {
   $('.dropdown-content').hide();
  $('.right').click(function (e) { 
      e.preventDefault();
      $('.dropdown-content').slideToggle('slow');
  });
});

$(document).ready(function () {
  $('.title').hide();
  $('.left .icon').click(function (e) { 
      e.preventDefault();
      $('.left .title').slideToggle('slow');
     // $('.right .title').hide('slow');
  });
});

$(document).ready(function () {
  $('.title').hide();
  $('.right1 .icon').click(function (e) { 
      e.preventDefault();
      $('.right1 .title').slideToggle('slow');
      // $('.left .title').hide('slow');
  });
});

$(document).ready(function () {
  $('.show-cate-main-custom').hide();
  $('.header-cate-menu ').click(function (e) { 
      e.preventDefault();
      $('.show-cate-main-custom').slideToggle('slow');
  });
});

$(document).ready(function(){
  $('.content-left').slick({
    
    autoplay: true,
    nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-left"></i></button>',
    prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-right"></i></button>'
   
    
  });
});
$(document).ready(function(){
  $('.product-item').slick({
    
    slidesToShow: 5,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 2000,
    nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-left"></i></button>',
    prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-right"></i></button>'
    // arrows: true,
    
  });

  $('.woocommerce-img-main').slick({
   // nextArrow: true,
   centerPadding: '40px',
    slidesToShow: 1,
    centerMode: true,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    centerPadding: '60px',
    asNavFor: '.woocommerce-img-sub'
  });
  $('.woocommerce-img-sub').slick({
    //nextArrow: true,
    centerPadding: '40px',
    nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-left"></i></button>',
    prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-right"></i></button>',
    slidesToShow: 4,
    slidesToScroll: 1,
    centerPadding: '40px',
    centerMode: true,
    asNavFor: '.woocommerce-img-main',
    //dots: true,
    centerMode: true,
    focusOnSelect: true
    
  });
});
  