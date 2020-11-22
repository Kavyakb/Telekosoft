var nav=$('.navbar');
       var fixedtop='fixed-top';
       var headerheight=$('#header').height()+50;
       
       $(window).scroll(function(){
                        if($(window).scrollTop() > headerheight)
                          nav.addClass(fixedtop);
                         else
                         nav.removeClass(fixedtop);
        })

 if($(window).scrollTop() > headerheight)
                          nav.addClass(fixedtop);
                         else
                         nav.removeClass(fixedtop);
