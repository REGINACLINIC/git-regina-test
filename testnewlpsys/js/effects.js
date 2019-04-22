$(function(){
  var wh = $(window).height(),
      hh = $("header").height(),
      mh = $("#mainimg").height(),
      fh = $("footer").height();
  $("#container").css("min-height",wh - hh - mh -fh);
  //InViewアニメーション
  var animation,delay;
  $('.iv').each(function(){
    delay = $(this).data("delay");
    //$(this).addClass(animation);
    $(this).css("animation-delay",delay);
    $(this).on('inview', function(event, isInView) {
      animation = $(this).data("animation");
      if(!animation){
        animation = "fadeIn";
      }
      if(isInView){
        $(this).addClass("animated").addClass(animation);
      }
      else{
        if(!$(this).data("only") === true){
          $(this).removeClass("animated").removeClass(animation);
        }
      }
    });
  });
});