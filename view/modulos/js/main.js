$(document).ready(function(){
    $('.up').hide();

    $(window).scroll(function(){
       if($(this).scrollTop() >100){
          $('.up').fadeIn('1000');
       } else{
          $('.up').fadeOut('1000');
       }
    });

    $('.up').click(function(){
        $('body, html').animate({
            scrollTop: 0
        },'300');
    });
});

$(document).ready(function(){
    $('#logo_m').show();

    $(window).scroll(function(){
       if($(this).scrollTop() >100){
           $('#logo_m').hide();
       } else{
         $('#logo_m').show();
       }
    });

});

$(document).ready(function(){
    $('#subtitulo_info').show();

    $(window).scroll(function(){
       if($(this).scrollTop() >100){
           $('#subtitulo_info').hide();
       } else{
         $('#subtitulo_info').show();
       }
    });

});

$(document).ready(function(){
  $("#Mujer").click(function(){
    $(".h_p").hide();
    $(".m_p").show();
  });
});

$(document).ready(function(){
  $("#Hombre").click(function(){
    $(".m_p").hide();
    $(".h_p").show();
  });
});
