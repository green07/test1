$(document).ready( function() {

	hideMainHeader('.contents');

	// Product Catalog hover effect
	var cat_hov;
	$( '.product-catalog td:first-child a' ).hover(
		function() {
			cat_hov = $( 'tr' ).index( $( this ).closest( 'tr' ) );
			$( '.catalog-banner img:nth-child(' + cat_hov + ')' ).addClass( "hover-effect" );
		}, function() {
			$( '.catalog-banner img:nth-child(' + cat_hov + ')' ).removeClass( "hover-effect" );
		}
	);
	// Product Catalog hover effect end

	// Back to Top
	$(document).on('click', '#return-to-top', function(e) {
		return false;
	});
	$(window).scroll(function() {
		var max_px = $('.introduction').offset().top + 10;
		if ($(this).scrollTop() >= max_px) { // If page is scrolled more than 50px
			$('#return-to-top').fadeIn(200); // Fade in the arrow
		} else {
			$('#return-to-top').fadeOut(200); // Else fade out the arrow
		}
	});

	$('#return-to-top').on('click touchend', function(event){
		$('html,body').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
	// Back to Top end
});

$(document).on('scroll', function (e) {
	hideMainHeader('.contents');
});