$(document).on('ready', function(){
    hideMainHeader('.contents');
});

$(document).on('scroll', function (e) {
hideMainHeader('.contents');
});

// ===== Scroll to Top ==== 
$(document).on('click', '#return-to-top', function(e ){  
    return false;
});


$(window).scroll(function() {
    var max_px = $('.contents').offset().top + 10;
    if ($(this).scrollTop() >= max_px) {        // If page is scrolled
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});

$('#return-to-top').on('click touchend', function(event){
    $('html,body').animate({
        scrollTop: 0
    }, 500);
    return false;
});