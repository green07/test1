$(document).ready(function () {

    // Click event for the menu in the content page
    $(document).on('click', '#pager h5', function () {   
        var topic = $(this).parent();
        var subTopic = topic.find('ul, h3');
        var heading = topic.find('h5');

        if (subTopic.css('display') == 'none') {
            // Add emphasis to the menu 
            subTopic.css('display', 'block');
            heading.css('font-weight', 'bold');
        } else {
            // Remove emphasis to the menu
            subTopic.css('display', 'none');
            heading.css('font-weight', 'normal');
        }
    });

    // Click event for the 
    $(document).on('click touchstart', '.dropdown-table tr  th', function () {   
        var row = $(this).parents('.dropdown-table').find('tr:nth-child(2)');
        var display = row.css('display') == 'none' ? 'table-row' : 'none';

        $(this).parents('.dropdown-table').find('tr').each(function(index) {
            if (index > 0) {
                $(this).css('display', display);
            }
        });
    });

    // Click 
    $(document).on('click touchstart', '.dropdown > h4', function () {   
        var content = $(this).parent().find('.dropdown-content');
        var display = content.css('display') == 'none' ? 'block' : 'none';
        content.css('display', display);
    });

    $('#pager a').each(function() {
        var url = window.location.pathname;
        var href = $(this).attr('href');

        if (url == href){
            $(this).css('font-weight', 'bold');
            
            var topic = $(this).closest('.topic')
            var subTopic = topic.find('ul, h3');
            var heading = topic.find('h5');

            subTopic.css('display', 'block');
            heading.css('font-weight', 'bold');

            return false;
        }
    });

    // ===== Scroll to Top ==== 
    $(document).on('click', '#return-to-top', function(e ){
        return false;
    });
    $(window).scroll(function() {
        var max_px = $('#description').offset().top + 10;
        if ($(this).scrollTop() >= max_px) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });

    // $(document).on('click', '#return-to-top', function(e ){      // When arrow is clicked
    //     $('body,html').animate({
    //         scrollTop : 0                       // Scroll to top of body
    //     }, 500);
    // });

    $('#return-to-top').on('click touchend', function(event){
        $('html,body').animate({ scrollTop: 0 }, 500);
        return false;
    });

});



