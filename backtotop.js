var coverheight = $('#cover-image').height();
$(window).scroll(function (){
    if($(window).scrollTop() > coverheight)
        $('#backtotop').addClass('visible');
    else
        $('#backtotop').remove('visible');
});
//if($(window).scrollTop() > coverheight)
//        $('#backtotop').addClass('visible');
//    else
//        $('#backtop').remove('visible');


