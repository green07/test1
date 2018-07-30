$(document).ready(function() {

    $(".position .info-button").click(function() {
        var className = "";
        var buttonIndex = $(this).index(".info-button");
        var container = $(this).parent().parent().parent();
        container.css("min-height", container.height() + 50);
        $(".position-message:eq(" + buttonIndex + ")").fadeOut("fast");
        $(".position-content-close:eq(" + buttonIndex + ")").fadeIn("slow");

        // post-detail movement - right to left / left to right
        if (buttonIndex % 2 == 0) {
            className = "transToLeft";
            $(".post-detail-left").removeClass("transRetToLeft");
        } else {
            className = "transToRight"
            $(".post-detail-right").removeClass("transRetToRight");
        }
        $(".post-jobs:eq(" + buttonIndex + ")").addClass(className);
        window.setTimeout(function() {
            $(".post-salary:eq(" + buttonIndex + ")").addClass(className);
        }, 400);
        window.setTimeout(function() {
            $(".post-docs:eq(" + buttonIndex + ")").addClass(className);
        }, 800);

    })


    // close button on click - hide position content
    $(".position-content-close span").mouseup(function(e) {

        var className = "";
        buttonIndex = $(this).index(".position-content-close span");
        if (buttonIndex % 2 == 0) {
            className = "transToLeft";
            $(".post-detail-left").addClass("transRetToLeft");
        } else {
            className = "transToRight"
            $(".post-detail-right").addClass("transRetToRight");
        }
        $(".post-jobs:eq(" + buttonIndex + ")").removeClass(className);
        $(".post-docs:eq(" + buttonIndex + ")").removeClass(className);
        $(".post-salary:eq(" + buttonIndex + ")").removeClass(className);

        $(".post-head:eq(" + buttonIndex + ")").removeClass("header-marginTopZero").addClass("header-marginToTen");
        $(".position-content-close:eq(" + buttonIndex + ")").fadeOut("fast");
        $(".position-message:eq(" + buttonIndex + ")").fadeIn("slow");


        var container = $(this).parent().parent();
        container.css("min-height", "unset");
    });



});

// ===== Scroll to Top ==== 
$(document).on('click', '#return-to-top', function(e) {
    return false;
});
$(window).scroll(function() {
    var max_px = $('.contents').offset().top + 10;
    if ($(this).scrollTop() >= max_px) { // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200); // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200); // Else fade out the arrow
    }
});

$(document).on('click', '#return-to-top', function(e) { // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0 // Scroll to top of body
    }, 500);
});