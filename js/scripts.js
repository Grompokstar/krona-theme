jQuery(function(){
  jQuery("a[href^='#']").click(function(){
    var _href = jQuery(this).attr("href");
    jQuery("html, body").animate({scrollTop: jQuery(_href).offset().top+"px"}, 1000);
    return false;
  });
});