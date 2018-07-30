//Slick initialize
$(document).ready(function(){
	sessionStorage.setItem("cPage","");

	$('.product-carousel').slick({
		lazyLoad: 'progressive',
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 10000,
		draggable: false,
		prevArrow: $('.product .carousel-left'),
		nextArrow: $('.product .carousel-right'),
		pauseOnHover: true,
		pauseOnFocus: true,
		responsive: [ {
				      		breakpoint: 1024,
				      		settings: {
						      slidesToShow: 3,
						      draggable: true,

				      		}
				    	},
					{
				      		breakpoint: 800,
				      		settings: {
						      slidesToShow: 2,
						      draggable: true,

				      		}
				    	},
				    {
					      breakpoint: 579,
					      settings: {
						      slidesToShow: 1,
						      draggable: true,

					      }
				    }
				  ]
	});

	//pause the product carousel on chevron click
	$('.product-carousel, .carousel-left, .carousel-right').on('click touchstart', function(event, slick, currentSlide) {
		$('.product-carousel').slick('slickPause');
	});

	function delayAnimation(pElement, pDelayAttr, pClassName){
		if (typeof pDelayAttr !== typeof undefined && pDelayAttr !== false){
			pElement.delay(pDelayAttr).queue(function(){
				pElement.addClass(pClassName);
				pElement.removeClass('animate-this');
			});
		}else {
			pElement.addClass(pClassName);
			pElement.removeClass('animate-this');
		}
	}

	function animateElements (){
		//detect all elements with the class
		$(".animate-this").each(function(){

			//determine the position of the element
			var pos = $(this).offset().top;

			//determine the scroll value + the amount of tolerance before poping the animation
			var winTop = $(window).scrollTop() + 600;

			//delay introduction
			var attr = $(this).attr('delay');

			//if we have reached the position of the element in the screen and its requested animation tag is in these conditions
			//ask which animation to implement, perform the animation only if hasn't animated yet
			if (pos < winTop){
				if ($(this).hasClass("fade-this-down")){
					delayAnimation($(this), attr, 'fade-down');
				}else if ($(this).hasClass("fade-this-up")){
					delayAnimation($(this), attr, 'fade-up');
				}else if ($(this).hasClass("fade-this-left-seq")){
					$( '.fade-this-left-sect' ).each(function() {
						var attr = $(this).attr('delay');
						delayAnimation($(this), attr, 'fade-left');
					});
				}else if ($(this).hasClass('fade-this-left')){
					delayAnimation($(this), attr, 'fade-left');
				}
			}
		});
	}

	animateElements ();
	hideMainHeader('#businessContent');

	$(document).on('scroll', function (e) {
		animateElements ();
		hideMainHeader('#businessContent');

		var max_px = $('.introduction').offset().top + 10;
		if ($(this).scrollTop() >= max_px) { // If page is scrolled more than 50px
			$('#return-to-top').fadeIn(200); // Fade in the arrow
		} else {
		  	$('#return-to-top').fadeOut(200); // Else fade out the arrow
		}
	});

	//smooth scrolling for the onpage anchor link
	$('#businessLink1, #navContact, #burgerContact').on('click touchend', function (event){
		var element = $(this).attr('targ');
		if ($(this).attr('id') == 'burgerContact'){ $('#btn-close').trigger('click');}

		$('html,body').animate({scrollTop: $(element).offset().top - 70},'slow');
	});
	// $('#return-to-top').on('click touchend', function(){ $('html,body').animate({scrollTop: 0},500); return false;});
	$('#return-to-top').on('click touchend', function(event){
        event.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 500);
        // return false;
    });
});