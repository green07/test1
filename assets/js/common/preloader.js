/* Load the page first and if completed release the preloader*/
document.onreadystatechange = function () {
	if (document.readyState == "complete") {
		 
		 //if the loading was done remove the element then begin fading
		$('.spinner').remove();
		//fade out animation
  		$('.preloader').fadeOut('slow',function(){
  			//after it is completely gone remove the element
  			$('.preloader').remove();
  		});
	}
}