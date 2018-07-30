var xhttp = new XMLHttpRequest();
var pageList = {};
xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		var xmlDoc = this.responseXML;
		var product = xmlDoc.getElementsByTagName("product");
		var footer = "<div class='btnhov btnhov-color'><a class='button-main button-blue'";
		var productDetails;
		var productInfo;
		var imageSrc;
		var title;
		var titleHead;
		var subtitle;
		var alt;
		var link;

		$(product).each(function( i ) {
			productInfo = product[i].childNodes;
			productDetails = "<div class='box-shade'><div class='row'><div class='col-sm-4'><div class='img-box'>";
			titleHead = "<div class='col-sm-8'>";

			$(productInfo).each(function( j ) {

				if(productInfo[j].nodeType == 1) {
					main_element = productInfo[j];

					if(main_element.tagName == 'image'
					&& main_element.textContent.trim().length > 0) {
						imageSrc = "<img src='" + main_element.textContent.trim() + "'";
						productDetails += imageSrc;
					}

					else if(main_element.tagName == 'title'
					&& main_element.textContent.trim().length > 0) {
						alt = "alt ='" + main_element.textContent.trim() + "' /></div></div>";
						title = titleHead + "<h4 class='header-sub'>" + main_element.textContent.trim() + "<span class='head-divider'> | </span>";
						productDetails += alt + title;
					}

					else if(main_element.tagName == 'subtitle'
					&& main_element.textContent.trim().length > 0) {
						subtitle = "<small>" + main_element.textContent.trim() + "</small></h4>";
						productDetails += subtitle;
					}

					else if(main_element.tagName == 'desc'
					&& main_element.textContent.trim().length > 0) {
						subtitle = "<p>" + main_element.textContent.trim() + "</p>";
						productDetails += subtitle;
					}

					else if(main_element.tagName == 'link'
					&& main_element.textContent.trim().length > 0) {

						if(main_element.textContent.trim() == 'none') {
							productDetails += "</div></div></div>";
						} else {
							link = footer + " href = '" + main_element.textContent.trim() + "' >";
							link += "<span class='jpn-trans'>詳細はこちら</span></a>";
							productDetails += link + "</div></div></div></div>";
						}
					}
				}
			});
			$( ".content").append(productDetails);
		});
	}
};
xhttp.open("GET", "/inter/assets/xml/productsHomepage.xml", true);
xhttp.send();