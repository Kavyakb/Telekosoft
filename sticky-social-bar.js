var sticky=$('#sticky-social-icon');
       var coverHeight=$('#cover-image').height();
       var dflex="d-flex";
       var dnone="d-none";
       $(window).scroll(function(){
            if($(window).scrollTop()>coverHeight){
           sticky.removeClass(dnone);
           sticky.addClass(dflex);
       }
       
       else{
           sticky.removeClass(dflex);
           sticky.addClass(dnone);
       }
       })
//if($(window).scrollTop()>coverHeight){
//           sticky.removeClass(dnone);
//           sticky.addClass(dflex);
//       }
//       else{
//           sticky.removeClass(dflex);
//           sticky.addClass(dnone);
//       }
//}