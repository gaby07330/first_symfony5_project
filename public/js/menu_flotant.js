$(function(){

  $(window).on('scroll', function(){                       

    var nav_float = $('#nav_float').offset().top;     
    var windowPos = $(window).scrollTop() / 0.9;         

    if(windowPos > nav_float)                          
    {
      $('nav').addClass('top');                       
    }
    else
    {
      $('nav').removeClass('top');                    
    }
  });
});