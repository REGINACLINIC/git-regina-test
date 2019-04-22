$(function(){
   // #で始まるアンカーをクリックした場合に処理
   $('a[href^=#]').click(function() {
    var headerH = $('header').height();
    if(!$(this).hasClass('noSmooth')){
      // スクロールの速度
      var speed = 1000; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      var ww = $(window).width();
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'easeOutCubic');
      return false;
    }
   });
});
$(window).on('load', function() {
  var url = $(location).attr('href');
  if(url.indexOf("?id=") != -1){
    var id = url.split("?id=");
    var $target = $('#' + id[id.length - 1]);
    if($target.length){
      var pos = $target.offset().top - $("header").height();
      $("html, body").animate({scrollTop:pos}, 0, 'easeOutCubic');
    }
  }
});