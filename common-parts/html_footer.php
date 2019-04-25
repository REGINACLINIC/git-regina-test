<script src="js/jQuery_v2.1.3.js"></script> 
<script src="js/lazysizes.js"></script> 
<script type="text/javascript">
$(function($){
  $("img.lazy").lazyload({skip_invisible: true,placeholder: 'image/gif-load.gif'
    });
});
</script> 
<script src="js/jquery.easing.1.3.js"></script> 
<script src="js/jquery.inview.js"></script> 
<script src="js/effects.js"></script> 
<!--Accordion--> 
<script>
$(function() {
    function accordion() {
        $(this).toggleClass("active").next().slideToggle(800);
    }
    $(".accordion .toggle").click(accordion);
});</script> 
<!-- Facebook Pixel Code --> 
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '854598964627220');
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=854598964627220&ev=PageView&noscript=1">
</noscript>
<!-- End Facebook Pixel Code -->