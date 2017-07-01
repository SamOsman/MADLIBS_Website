//function detects scrolling, base on scroll bar point
//class 'sticky' is either removed or added
$(document).ready(function(){

    var nav = $('.title');
    //#button, date;
    var button = $("#button");
    var date = $("#date");
        
    $(window).scroll(function () {
        //Logs to the console the scroll bar number 
        console.log($(window).scrollTop())
        
        if ($(this).scrollTop() > 250) {
            nav.addClass("sticky");
            date.css("margin-top", "10px");
            button.css("margin-top", "10px");
            
        } else {
            nav.removeClass("sticky");
            date.css("margin-top", "35px");
            button.css("margin-top", "35px");
           
        }
    });

}); 
     
  

















