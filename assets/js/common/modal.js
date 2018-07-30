// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('imgView');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

$(document).on('click', '.imgView', function(e){
    $('body').css('overflow', 'hidden');
	// $('.imagepreview').attr('src', $(this).find('img').attr('src'));
	// $('#imagemodal').modal('show');
    modal.style.display = "block";
    // modalImg.src = this.src;
    // console.log($(this).attr('src'))
    // console.log(this.src)
    // $('#img-container').attr('src', this.src);
    $('#img-container').attr('src', $(this).attr('src'));
    // captionText.innerHTML = this.alt;
    captionText.innerHTML = $(this).attr('alt');
    console.log(this)
    return false;
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
    $('body').css('overflow', 'auto');
}

$(document).on('click touchstart touchmove', '#myModal', function(e){
    // modal.style.display = "none";
    var image = $('#img-container');
       // if the target of the click isn't the container nor a descendant of the container
       if (!image.is(e.target) && image.has(e.target).length === 0) {
            setTimeout(function(){
                modal.style.display = "none";
                $('body').css('overflow', 'auto');
            }, 100);
       }
});

// var position = $(window).scrollTop(); 

// // should start at 0
// $(window).scroll(function(e) {
//     // alert()
//     console.log(e.originalEvent)
//     var scroll = $(window).scrollTop();
//     if(scroll > position) {
//         console.log('SCROLL: ' + scroll);
//         console.log('POSITION: ' + position)
//         // $('div').text('Scrolling Down Scripts');
//         // modal.style.display = "none";
//     } else {
//         console.log('SCROLL: ' + scroll);
//         console.log('POSITION: ' + position)
//         // console.log('scrollUp');
//         // $('div').text('Scrolling Up Scripts');
//     }
//     position = scroll;
// });