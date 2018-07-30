

// ===== Scroll to Top ==== 
$(document).on('click', '#return-to-top', function(e ){  
    return false;
});

$(window).scroll(function() {
    var max_px = $('.content').offset().top + 10;
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

function isMobile() {
    var flg = false; 
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
    flg = true;
    }

    return flg;
}

$( document ).ready(function() {
    AOS.init({
        duration: 500,
    })

    readMore()

    if(!isMobile()) {
        resizedBrowser()
        pagination()
    } else {
        $('.text').each(function(){
            $(this).height('auto')
        });
    }
    // var a = [{"test1" : 1 , "test2" : 2, "test3" : 3}, 
    // {"test1" : 1 , "test2" : 2, "test3" : 3}];
    // // a.forEach((item, index) => {
    // //     console.log(item)
    // // });

    // a.forEach((product, index) => {
    //     console.log(product);
    //     for(var i in product) {
    //         console.log(product[i])
    //     }
    // });
    // console.log(a.length)

    var x = "32243";
var reversed = "";

for(var a = 0; a < x.length; a++) {
  reversed += x.substring((x.length - 1)-a, x.length-a);
  
}

// console.log(reversed.charAt(2));

// document.getElementById('select').onchange = function(evt) {
//     // console.log(this.files[0])
//     $.each(this.files, function(){
//         console.log(this)
//     });
//     // ImageTools.resize(this.files[0], {
//     //     width: 357, // maximum width
//     //     height: 245 // maximum height
//     // }, function(blob, didItResize) {
//     //     console.log(blob)
//     //     // didItResize will be true if it managed to resize it, otherwise false (and will return the original file as 'blob')
//     //     document.getElementById('preview').src = window.URL.createObjectURL(blob);
//     //     // you can also now upload this blob using an XHR.
//     // });
// };

})
// var formData = new FormData();
let fileContainer = {};
const formatList = ['original', 'preview', 'thumbnails'];
$(function() {
    
    let inputFile = document.getElementById('file');
    let uploadArea = document.getElementById('upload-area-container');
    $("html").on("drop", function(e) { e.preventDefault(); e.stopPropagation(); });

    // Drag over
    $('.upload-area-container').on('dragover', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).children().css('opacity', '.1');
    });

    // Drag out
    $('.upload-area-container').on('dragleave', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).children().css('opacity', '1');
    });

    // Drop
    $('.upload-area-container').on('drop', function (e) {
        e.stopPropagation();
        e.preventDefault();

        $(this).children().css('opacity', '.1');
        var file = e.originalEvent.dataTransfer.files;
        var fd = new FormData();
        inputFile.files = file;
        // uploadData(fd);
    });

    // Open file selector on div click
    $("#upload-area").click(function(){
        $("#file").click();
    });

    // file selected
//     $("#file").change(function(e){
// console.log(e)
//         // uploadData(fd);
//         console.log(this.files)
//         insertFileToPreviewField(this.files)
//     });  

    inputFile.addEventListener('change', (e) => {
        e.preventDefault();
        var previewCounter = $('#preview > div').length;
        if(inputFile.files.length > 0) {
            if(previewCounter < 9) {

                // if(fileContainer['original']) {
                //     var container = fileContainer['original'];
                //     for(const file of e.srcElement.files) {
                //         console.log(container)
                //         console.log(file)
                //         container.push(file);
                //         console.log(fileContainer['original'])
                //     }
                // } else {
                //     fileContainer['original'] = e.srcElement.files;
                //     console.log(fileContainer)
                // }

                // getAvailableSlotForUpload
                insertFileList(e.srcElement.files)
                // fileContainer['original'].push('test');
                // processFile(fileContainer.original)
                appendFileToPreviewField(e.srcElement.files)
            }
        } else if(previewCounter == 0){
            
            $('.upload-area').children().css('opacity', '1');
        }
    });

    function insertFileList(files) {
        var container = [];
        var counter = 0;

        for(const file of files) {
            if(counter < getAvailableSlotForUpload()) {
                if(fileContainer['original']) {
                    fileContainer['original'][fileContainer['original'].length] = file
                } else {
                    container.push(file)
                    fileContainer['original'] = container
                }
                
            } else {
                break;
            }
            counter++;
        }
    }

    async function appendFileToPreviewField(files) {
        var counter = 0;
        var limit = getAvailableSlotForUpload();
        var format = [{'format' : 'preview', 'insert' : true, 'width' : 273, 'height' : 150}, 
                    {'format' : 'thumbnails', 'insert' : false, 'width' : 173, 'height' : 100}];
        var container = [];
        // console.log(preview)
        $('.upload-area').css('opacity', '.1');
            // $.each(files, function(){
        // return new Promise(list => {
        // var format = [{'type' : 'preview', 'type' : 'thumbnails'}];
            for(const type of format) {
                container = [];
                counter = 0;
                for(const file of files) {
                    if(counter < limit) {
                        container.push(await appendFile(file, type, counter));
                        // container[counter] = await appendFile(file, type, counter);
                    } else {
                        break;
                    }
                    counter++;
                // });
                }
                // console.log(fileContainer)
                // return list['FileList'] = container;
                
                if(fileContainer[type.format]) {
                    for (const file of container) {
                        fileContainer[type.format][fileContainer[type.format].length] = file
                    }
                } else {
                    fileContainer[type.format] = container;
                }
            }
        // });
    }

    function appendFile(file, format, index) {
        var preview = $('#preview');
        var div = '<div class="col-lg-3 card-container" id="card'+ index +'"> <div class="card">';
        var closeButton = '<button type="button" class="close" aria-label="Close" float-right><span class="close-button" id="'+ index +'" aria-hidden="true">&times;</span></button>'
        var body = '<div class="card-body">';
        var titleField = '<input class="form-control" type="text" id="title" placeholder="Title">';
        var textArea = '<textarea class="form-control" id="description" rows="5" placeholder="Description"></textarea>';
        var tagField = '<input class="form-control" type="text" id="tag" placeholder="Tag">';
    
        return new Promise(result => {
        
            var img = '<img class="img card-img-top" src="';
            ImageTools.resize(file, {
                width: format.width, // maximum width
                height: format.height // maximum height
            }, function(blob, didItResize) {
                if(format.insert) {
                    img = img + window.URL.createObjectURL(blob) + '">';
                    preview.append(div + closeButton + img + body + titleField + textArea + tagField + '</div></div>');
                    // didItResize will be true if it managed to resize it, otherwise false (and will return the original file as 'blob')
                    document.getElementById('preview').src = window.URL.createObjectURL(blob);
                }
                // console.log(new File([blob], blob.name))
                result(new File([blob], blob.name));
            });
        
        });
    }
    
    
    function getAvailableSlotForUpload() {
        return 8 - $('#preview > div').length;
    }

    $(document).on('click', '.close-button', function (e) {
        removeItem($(this).attr('id'))

    });
    
    async function removeItem(id) {
        delete fileContainer['original'][id];
        delete fileContainer['preview'][id];
        delete fileContainer['thumbnails'][id];
        console.log(fileContainer)
        
        await updateList(id);
        // $('#card' + id).remove();
    }
    
    async function updateList(id) {
        for(const format of formatList) {
            for(var i = id; i < fileContainer[format].length; i++) {
                if((i + 1) == fileContainer[format].length) {
                    console.log(i)
                    console.log(fileContainer[format])
                    fileContainer[format].splice(i, 1);
                } else {
                    fileContainer[format][i] = fileContainer[format][i + 1];
                }
            }
        }
        
        console.log(fileContainer)
    }
});




function pagination(){
   //Pagination
   pageSize = 8;

   var pageCount =  $(".topic").length / pageSize;
   var currentPage = parseInt(1);

   $("#pagin li").first().find("a").addClass("current")
   
    showPage = function(page) {
        var nextPrev = '';
        var arrow = '';
        $(".topic").hide();
        $(".topic").each(function(n) {
            if (n >= pageSize * (page - 1) && n < pageSize * page)
            $(this).show();
        });

        $("#pagin").find('li').remove();

        if(page == 1) {
            nextPrev = 'Next <span style="background-image:url(/inter/assets/images/common/arrow-right.png)" class="arrow"></span>'
            insertPageButton(nextPrev)
        } else if(page < pageCount){        
            nextPrev = '<span style="background-image:url(/inter/assets/images/common/arrow-left.png)" class="arrow"></span> Previous'
            insertPageButton(nextPrev)
            nextPrev = 'Next <span style="background-image:url(/inter/assets/images/common/arrow-right.png)" class="arrow"></span>'
            insertPageButton(nextPrev)
        } else if(page == pageCount || page > pageCount) {
            nextPrev = '<span style="background-image:url(/inter/assets/images/common/arrow-left.png)" class="arrow"></span> Previous'
            insertPageButton(nextPrev)
        }
    }
   
   showPage(parseInt(currentPage));

    $(document).on('click', '#pagin li a', function(e) {
        $("#pagin li a").removeClass("current");
        $(this).addClass("current");
        if($(this).text().trim().indexOf('Next') >= 0) {
            currentPage++;
        } else {
            currentPage--;
        }
        showPage(currentPage)
        AOS.refresh();
        resizedBrowser();
        $('html, body').animate({ opacity: 0 }, 0);
        $('html, body').animate({
            scrollTop : parseInt($(".greetingsTitle").offset().top) - 80,
        }, 0);

        $('html, body').animate({
            opacity: 1
        }, 'slow');

        return false;
    });
}

function insertPageButton(nextPrev) {
    $("#pagin").append('<li><div class="btnhov btnhov-color">'
    + '<a class="button-main button-blue" href="#">'
    + nextPrev
    + '</a></div></li>');
}

function resizedBrowser(){
    $('.text').each(function(){
        $(this).height('205')
        // if( (this.offsetHeight < this.scrollHeight) || (this.offsetWidth < this.scrollWidth)){
        //     // Element have overflow
        //     $(this).height('auto')
        // } else {
        //     $(this).height('205')
        // }
    });
}

function readMore() {
    var contentArray = [];
    var index="";
    var clickedIndex="";  
    // var minimumLength=$('.read-more-less').attr('data-id');
    var minimumLength= 300;
    var initialContentLength=[];
    var initialContent=[];
    var initialContainer=[];
    var readMore="........<br/><hr/><span class='read-more'><span class='glyphicon glyphicon-plus-sign'></span>Read More</span>";
    var readLess=".......<br/><hr/><span class='read-less'><span class='glyphicon glyphicon-minus-sign'></span>Read Less</span>";  
    var readMoreDiv = "<div class='read-more'><span>Read More<span></div>"
    $('.read-toggle').each(function(){
        index = $(this).attr('data-id');  
        contentArray[index] = $(this).html();
        
        // initialContentLength[index] = $(this).html().length;
        initialContentLength[index] = this.offsetHeight;
        // console.log($(this).parent())
        // console.log(this.offsetHeight)
        // console.log(this.scrollHeight)
        if(this.scrollHeight > initialContentLength[index]) {
            console.log($(this))
            $(this).append(readMoreDiv);
            initialContent[index] = $(this).html().substr(0,minimumLength);
            // initialContainer[index] = ;
            // $(this).html(initialContent[index]+readMore);
            $(this).css('overflow-y', 'hidden');
        } else {
            initialContent[index]=$(this).html();
        } 
            
        //console.log(initialContent[0]);  
    
    
    });
    $(document).on('click','.read-more',function(){
        // $(this).parents('.read-toggle').slideToggle(500, function(){
            $(this).find('span').text('Read Less')
        console.log( $(this).height())
        var height = $(this).parent().prop('scrollHeight') - $(this).height();
        $(this).parents('.read-toggle').height(height);
        clickedIndex = $(this).parents('.read-toggle').attr('data-id');
        // $(this).parents('.read-toggle').html(contentArray[clickedIndex]+readLess);
        // $(this).parents('.read-toggle').slideDown(500);
            // $(this).parents('.read-toggle').slideDown("slow");
            var elem = $(this).parents('.read-toggle');
            $(this).parents('.read-toggle').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',   
            function(e) {
                // console.log(e.type)
                // elem.html(contentArray[clickedIndex]+readLess);
                // $(this).attr('class', 'read-less')
            })

            $(this).attr('class', 'read-less')
            
        // });
        // $(this).attr('class', 'read-less')
    });
    $(document).on('click','.read-less',function(){
        $(this).find('span').text('Read More')
        $(this).parents('.read-toggle').height('205'); 
        // clickedIndex = $(this).parents('.read-toggle').attr('data-id');
        // $(this).parents('.read-toggle').html(initialContent[clickedIndex]+readMore);
        // $(this).parents('.read-toggle').slideUp(500);
        $(this).attr('class', 'read-more')

    });
}
    
    



var checker;

window.onresize = function() {
    clearTimeout(checker);
    checker = setTimeout(function() {
        resizedBrowser();
    }, 100);
};

    $("#uploadButton").on('click',(function(e) {
        e.preventDefault();
        
        console.log(fileContainer)
        
        // formData.append('original', fileContainer.original);
        for (var key in fileContainer) {
            for(const file of fileContainer[key]) {
                var formData = new FormData();
                formData.append(key, file);

                $.ajax({
                    url: "upload",
                    type: "POST",
                    // data:  new FormData(this),
                    data: formData,
                    contentType: false,
                            cache: false,
                    processData:false,
                    beforeSend : function() {
                    //$("#preview").fadeOut();
                    $("#err").fadeOut();
                    },
                    success: function(data) {
                        // alert('SUCCESS')
                        $('#result').append(data);
                        // if(data=='invalid') {
                        //     // invalid file format.
                        //     $("#err").html("Invalid File !").fadeIn();
                        // } else {
                        //     // view uploaded file.
                        //     $("#preview").html(data).fadeIn();
                        //     $("#form")[0].reset(); 
                        // }
                    },
                    error: function(e) {
                    $("#err").html(e).fadeIn();
                    }
                });
            }
        }
    }));