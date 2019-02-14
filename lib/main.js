$(document).ready(function() {
    $('.services-mobile').click(function() {
        $('.nav-menu-mobile-list').fadeToggle(100);
    });
    $('.about-mobile').click(function() {
        $('html, body').animate({
            scrollTop:$('.company').position().top
        }, 1000);
    });
    $('.contacts-mobile').click(function() {
        $('html, body').animate({
            scrollTop:$('.footer-contacts').position().top
        }, 1000);
    });
    $('.partners-mobile').click(function() {
        $('html, body').animate({
            scrollTop:$('.realization').position().top
        }, 1000);
    });
    $('.lefard-mobile').click(function() {
        $('html, body').animate({
            scrollTop:$('.lefard').position().top
        }, 1000);
    });
    $('.crystal-mobile').click(function() {
        $('html, body').animate({
            scrollTop:$('.crystal').position().top
        }, 1000);
    });
    $('.bohemia-mobile').click(function() {
        $('html, body').animate({
            scrollTop:$('.bohemia').position().top
        }, 1000);
    });
    
});