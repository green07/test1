$(document).ready(function() {
    var lastMarker = $("#osaka"); //last selected marker
    var startFlg = true; //start flag
    var animateFlg = false; //animate flg
    // display map marker
    displayMarker();

    // change map content base on the selected marker
    $('.pin').on('mouseenter', function(e) {

        var currentMarker = $(this).parent();
        var currentName = currentMarker.attr("id")
        var lastName = lastMarker.attr("id");

        // change class for inititialize animation
        if (startFlg && currentName != lastName) {
            lastMarker
                .find(".hline-left-animate-init")
                .removeClass("hline-left-animate-init")
                .addClass("hline-left-animate-return");
            lastMarker
                .find(".vline-left-animate-init")
                .removeClass("vline-left-animate-init")
                .addClass("vline-left-animate-return");
            lastMarker
                .find(".pulse-active")
                .removeClass("pulse-active")
                .addClass("pulse-inactive");
            lastMarker
                .find(".main-animate-init")
                .removeClass("main-animate-init")
                .addClass("main-animate-return");
            lastMarker
                .find(".title-animate-init")
                .removeClass("title-animate-init")
                .addClass("title-animate-return");
            startFlg = false;
        }

        // change class for the last selected marker
        if (currentName != lastName) {

            currentMarker
                .find(".pulse-inactive")
                .removeClass("pulse-inactive")
                .addClass("pulse-active");
            currentMarker
                .find(".vline-left")
                .addClass("vline-left-animate")
                .removeClass("vline-left-animate-return");
            currentMarker
                .find(".hline-left")
                .addClass("hline-left-animate")
                .removeClass("hline-left-animate-return");
            currentMarker
                .find(".main")
                .addClass("main-animate")
                .removeClass("main-animate-return");
            currentMarker
                .find(".title")
                .addClass("title-animate")
                .removeClass("title-animate-return");
            currentMarker
                .removeClass("unselected")
                .addClass("selected");
            lastMarker
                .find(".pulse-active")
                .removeClass("pulse-active")
                .addClass("pulse-inactive");
            lastMarker
                .find(".vline-left")
                .removeClass("vline-left-animate")
                .addClass("vline-left-animate-return");
            lastMarker
                .find(".hline-left")
                .removeClass("hline-left-animate")
                .addClass("hline-left-animate-return");
            lastMarker
                .find(".main")
                .removeClass("main-animate")
                .addClass("main-animate-return");
            lastMarker
                .find(".title")
                .removeClass("title-animate")
                .addClass("title-animate-return");
            lastMarker
                .removeClass("selected")
                .addClass("unselected");
            lastMarker = currentMarker;
        }
    });

    // on scroll display map marker
    $(document).on('scroll', function(e) {
        displayMarker();
    });


    /**
     * display the initial map marker
     */
    function displayMarker() {
        var selectedMarker = $(".animate-map-marker");
        var pos = selectedMarker.offset().top;
        var winTop = $(window).scrollTop() + 900;
        // check if map is on screen
        if (pos < winTop) {
            selectedMarker.parent().find(".pin").addClass("pin-animate");
            selectedMarker.find(".title").addClass("title-animate-init");
            selectedMarker.find(".main").addClass("main-animate-init");
            selectedMarker.find(".vline").addClass("vline-left-animate-init");
            selectedMarker.find(".hline").addClass("hline-left-animate-init");
        }
    }



});