<!-- SCRIPTS -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121642637-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-121642637-4');
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$("#btnLimpiar").click(function(event) {
 $("#buscar")[0].reset();.
});

$(document).ready(function() {


$('#s').keyup(function(){

if($("#s").val().length < 1) {
$('#btnLimpiar').hide(0);

}


});


$("#s").keypress(function(event) {
$('#btnLimpiar').show(0);
});
$("#btnLimpiar").click(function(event) {
$('#btnLimpiar').hide(0);
});

});

</script>

<script type="text/javascript">
(function(){try{var a=google_tag_manager[google_tag_manager["GTM-KMT5GZ9"].macro(2)];a.dataLayer.set("settings.location",document.location.href)}catch(b){console.log("referrer")}})();
</script>
<script type="text/javascript">
!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],
c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");try{fbq("init",google_tag_manager["GTM-KMT5GZ9"].macro(123)),fbq("track","PageView")}catch(b){};
</script>
<script type="text/javascript">
!function(b){if(!window.pintrk){window.pintrk=function(){window.pintrk.queue.push(Array.prototype.slice.call(arguments))};var a=window.pintrk;a.queue=[];a.version="3.0";a=document.createElement("script");a.async=!0;a.src=b;b=document.getElementsByTagName("script")[0];
b.parentNode.insertBefore(a,b)}}("https://s.pinimg.com/ct/core.js");pintrk("load",google_tag_manager["GTM-KMT5GZ9"].macro(124));pintrk("page");
</script>
<script type="text/javascript">
(function(){try{var a=google_tag_manager["GTM-KMT5GZ9"].macro(135),b=google_tag_manager["GTM-KMT5GZ9"].macro(136);a.event="VP";a=JSON.stringify(a);google_tag_manager["GTM-KMT5GZ9"].macro(137)(b,a)}catch(c){}})();
</script>
<!-- JS Plugins Init. -->
<script>
$(window).on('load', function () {
  // initialization of HSMegaMenu component
  $('.js-mega-menu').HSMegaMenu({
    event: 'hover',
    pageContainer: $('.container'),
    breakpoint: 767.98,
    hideTimeOut: 0
  });

  // initialization of svg injector module
  $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
});

$(document).on('ready', function () {
  // initialization of header
  $.HSCore.components.HSHeader.init($('#header'));

  // initialization of unfold component
  $('.modal fade search'){
    afterOpen: function () {
      $(this).find('input[type="search"]').focus();
    }
  });

  // initialization of malihu scrollbar
  $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

  // initialization of forms
  $.HSCore.components.HSFocusState.init();

  // initialization of form validation
  $.HSCore.components.HSValidation.init('.js-validate', {
    rules: {
      confirmPassword: {
        equalTo: '#signupPassword'
      }
    }
  });

  $.HSCore.components.HSShowAnimation.init('.js-animation-link');
  });
});
</script>

<script>
$(document).ready(function(){
   $("#file").on("change", function(){

      var inputValues = $(this).val();

      $('#label_span').html(inputValues);
   });
});
</script>

<script src="../js/vendor.min.js"></script>
<script src="../js/app.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/sweetalert.min.js"></script>
<script src="../js/operaciones.js"></script>
