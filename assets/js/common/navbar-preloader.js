
//hide or show the mainheader depending on page scroll position to avoid flickering
function hideMainHeader(pTargetDiv){
	if ($(pTargetDiv).offset().top <= $(window).scrollTop()){
		$('#mainHeader').css('visibility', 'hidden');
	}else {
		$('#mainHeader').css('visibility', 'visible');
	}
}

/* Load the page first and if completed release the preloader*/
document.onreadystatechange = function () {
	if (document.readyState === 'complete') {
		$('#preloaderWrapper').fadeOut('slow', function(){
			$("#preloaderWrapper").css("display", "none");
		});

	};
}

$(document).ready(function(){

	var location = window.location.toString()
	var menu = ['about', 'products', 'hypertree', 'topics', 'careers', 'contact'];

	// Add highlight to the item in menu modal that corresponds to the displayed page
	$.each(menu, function (index, value) {
		if (location.indexOf(value) !== -1) {
			$('.modal-dialog li:nth-child(' + (index + 1) + ')').addClass('selected');
			return;
		}
	});

	// Change highlight to the selected item in the menu modal
	$('.modal-dialog li').on('click touchstart', function (e) {
		$('.modal-dialog li').removeClass('selected');
		$(this).addClass('selected');
	});

    // Click event for hamburger icon
	$('.navbar-toggle').on('click touchstart', function (e) {
		$('body').css('overflow-y', 'hidden');
		document.ontouchmove = function(e){ e.preventDefault(); }
	});

    // Event when menu modal is displayed
	$('#nav-modal').on('hidden.bs.modal', function () {
		$('body').css('overflow-y', 'visible');
		document.ontouchmove = function(e){ return true; }
	});

    // Click event for close button in menu modal
	$('#btn-close').on('click touchstart', function (e) {
		$('#nav-modal').trigger('click');

		$.each(menu, function (index, value) {
			if (location.indexOf(value) !== -1) {
				$('.modal-dialog li:nth-child(' + (index + 1) + ')').addClass('selected');
				return;
			}
		 });
    });

	//add background to the navbar when scroll have passed the banner
	function animateNavBar(){
		if ($('#mainAboutUs').lenght){
			var scrollToTrigger = window.innerHeight * .75;
		}else {
			var scrollToTrigger = window.innerHeight * .7;
		}

		if ($(document).scrollTop() >= (scrollToTrigger-$('#navigation-bar').height())){
			$('#navigation-bar').addClass('navbar-theme-scroll');
		}else{
			$('#navigation-bar').removeClass('navbar-theme-scroll');
		}
	}

	$(document).on('scroll', function (e) {
		animateNavBar();

		//take the scroll top of the footer and the pixels needed to display the logo at the footer
		var mainFooterScrollTop = $('#mainFooter img.logo').offset().top + 60;

		//take the scroll amount plus the viewport height
		var scrollThreshold = $(document).scrollTop() + window.innerHeight;

		if (scrollThreshold >= mainFooterScrollTop){

			//if on the error page do not remove the navbar
			if ($('#errorContainer').length){
			}else{
				$('#navigation-bar').addClass('navbar-hide');
			}
		}else {
			$('#navigation-bar').removeClass('navbar-hide');
		}
	});

	animateNavBar();

	//Jenver added 2018-06-28
	//prevent the navbar modal bug on window resize
	$(window).on('resize', function(){
		if ($(window).width() > 767 && $('#nav-modal').hasClass('in')){
			 $('#btn-close').trigger('click');
		}
	});
});

var xhttp = new XMLHttpRequest();
var pageList = {};
xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		var xmlDoc = this.responseXML;
		var attr = '';
		var page = xmlDoc.getElementsByTagName("page");

		for (i = 0; i < page.length; i++) {
			var container = {}, arr_container = {};
			attr = page[i].childNodes
			for(var index in attr){
				if(attr[index].nodeType == 1){
					arr_container[attr[index].nodeName] = attr[index].textContent;
				}
			}

			pageList[page[i].attributes.getNamedItem("name").nodeValue] = arr_container;
		}
	}
};
xhttp.open("GET", "/inter/assets/xml/page-link.xml", true);
xhttp.send();

$(document).on('mousedown', '.overlay-content a', function(e){
	sessionStorage.removeItem('active-nav');
	sessionStorage.removeItem('cPage');
	localStorage.removeItem('active-nav');
	localStorage.removeItem('cPage');
});

$(document).on('mousedown', 'footer a', function(e){

		if($(this).attr('id') == 'company') {
			sessionStorage.setItem("cPage","");
		}
		sessionStorage.setItem("active-nav", $(this).attr('id'));
		sessionStorage.setItem("cPage", pageList[$(this).attr('id')].link);

		localStorage.setItem('active-nav', $(this).attr('id'));
		localStorage.setItem('cPage', pageList[$(this).attr('id')].link);
});
