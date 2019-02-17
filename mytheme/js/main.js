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

    $(".nav-menu").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 1000);
    });
    $(".footer-nav").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 1000);
    });
    $(".nav-menu-mobile").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 1000);
    });


});