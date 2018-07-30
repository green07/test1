$(document).on('click touchend', '.company-nav a', function(e){
    var cPage = $(this).attr('id');
    var url = window.location.href.split('?')[1]; // Returns full URL
    
    if(url) {
        window.history.replaceState('obj', 'newtitle', window.location.href.split('/?')[0]);
    }

    sessionStorage.setItem("active-nav", $(this).attr('id'));

    if(sessionStorage.getItem("active-nav") != sessionStorage.getItem("current-active-nav")) {
        $('footer').css('display','none');
        $('.company-nav div').removeClass('active');
        $('.contents').attr('style','min-height:1000px');
        $('.contents').empty();

        sessionStorage.setItem("current-active-nav", $(this).attr('id'))

        if (cPage in pageList){
            sessionStorage.setItem("cPage", pageList[cPage].link);
            $('.contents').load(pageList[cPage].link);

            if(cPage == 'location'){
                var a = $('#navigationBar').siblings(3).children();
                $.get('/inter/views/company/location.html', null, function(text){
                });

            } else if(cPage == 'history') {
                AOS.init({
                    duration: 500,
                })
            }
        }
        $(this).parent( "div" ).addClass('active');

        setTimeout(function(){
            $('footer').css('display','');
        }, 300);

        setTimeout(function(){
            $('.contents').attr('style','min-height:0');
        }, 300);
    }
    return false;
});

if(sessionStorage.getItem("cPage") && sessionStorage.getItem("active-nav")) {
    loadContents();
} else if(localStorage.getItem('active-nav') && localStorage.getItem('cPage')) {
    sessionStorage.setItem("active-nav", localStorage.getItem('active-nav'));
    sessionStorage.setItem("cPage", localStorage.getItem('cPage'));
    loadContents();
}

function loadContents() {
    localStorage.removeItem('active-nav');
    localStorage.removeItem('cPage');

    $('.company-nav div').removeClass('active');
    $('.contents').empty();
    $('.contents').load(sessionStorage.getItem("cPage"));
    $('#' + sessionStorage.getItem("active-nav")).parent('div').addClass('active');
    sessionStorage.setItem("current-active-nav", sessionStorage.getItem("active-nav"));

    if(sessionStorage.getItem("cPage").indexOf('history') > 0){
        AOS.init({
            duration: 500,
        })
    } else if(sessionStorage.getItem("cPage").indexOf('location') > 0){
        var url = window.location.href.split('?')[1]; // Returns full URL
        var locName = "";
        setTimeout(function(){
            if (url) {
                if (url == "osaka") {
                    locName = "#osaka-location";
                } else if (url == "tokyo") {
                    locName = "#tokyo-location";
                } else if (url == "nagoya") {
                    locName = "#nagoya-location";
                } else if (url == "hamamatsu") {
                    locName = "#hamamatsu-location";
                }

                if(locName.length){
                    $('html, body').animate({
                        scrollTop: $(locName).offset().top
                        - 100}, 1);
                }
            }
        }, 300);
    }
}

$(document).on('ready', function(){
    hideMainHeader('#companyContent');
});

$(document).on('scroll', function (e) {
    hideMainHeader('#companyContent');
});

// ===== Scroll to Top ==== 
$(document).on('click', '#return-to-top', function(e ){
    return false;
});

$(window).scroll(function() {
    var max_px = $('.company-nav').offset().top + 10;
    if ($(this).scrollTop() >= max_px) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);        // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);       // Else fade out the arrow
    }
});

$('#return-to-top').on('click touchend', function(event){
    $('html,body').animate({
        scrollTop: 0
    }, 500);
    return false;
});
