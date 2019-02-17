$(document).ready(function() {
    $('.services-mobile').click(function() {
        $('.nav-menu-mobile-list').fadeToggle(100);
    });
    $('.services_btn').click(function() {
        $('.hide--block').fadeToggle(200);
    })
    $('.list-item').click(function() {
        $('.hide--block').fadeOut(200);
    });

    $('a[href^="#"]').click(function(e){ 
        var _href = $(this).attr("href"); 
        $("html, body").stop().animate({scrollTop: $(_href).offset().top+"px"}, 1500); 
        
        e.preventDefault(); 
    });
    
    $(".services_btn").hover(
        function () {
           $('.hide--block').slideDown(0);
        }, 
        function () {
           $('.hide--block').slideUp(0);
        }
      );
      


});