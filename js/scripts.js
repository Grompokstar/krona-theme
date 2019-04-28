jQuery(function($){

  //плавная прокрутка к якорям
  $("a[href^='#']").click(function(){
    var _href = $(this).attr("href");
    $("html, body").animate({scrollTop: $(_href).offset().top+"px"}, 1000);
    return false;
  });

  $("a[href^='/#']").click(function(){
    var _href = $(this).attr("href").substring(1);
    $("html, body").animate({scrollTop: $(_href).offset().top+"px"}, 1000);
    return false;
  });


  $(window).scroll(function(){
    if($(this).scrollTop() > 100){
      $('.main-header').addClass('pinned');
    }
    else if ($(this).scrollTop() < 100){
      $('.main-header').removeClass('pinned');
    }
  });


  $(".mobile-menu-btn").click(function() {
    var $mobileMenu = $('#main-mobile-menu');

    if ($mobileMenu.hasClass('show')) {
      $mobileMenu.removeClass('show')
    } else {
      $mobileMenu.addClass('show')
    }
  })


  $('#main-mobile-menu a').click(function() {
    var $mobileMenu = $('#main-mobile-menu');

    $mobileMenu.removeClass('show')
  })
});