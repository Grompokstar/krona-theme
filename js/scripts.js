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
    if($(this).scrollTop() > 170){
      $('.main-header').addClass('pinned');
    }
    else if ($(this).scrollTop() < 170){
      $('.main-header').removeClass('pinned');
    }
  });
});