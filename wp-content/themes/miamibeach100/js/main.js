jQuery(document).ready(function() {

	jQuery('a.lightbox').nivoLightbox();
	jQuery("input.submit").attr("disabled", true);

	if (!(Modernizr.touch)) {   
		jQuery(window).stellar({horizontalScrolling: false, hideDistantElements: false});
	}

	if (jQuery(window).width() > 1000) {

		var listCount = jQuery(".horizontal-slider ul.slides li").length;
		listCount = (listCount - 1) * 540;
		var finalCount = listCount + 510;
		jQuery(".horizontal-slider ul.slides").width(finalCount);

	}

	//fitvids
	jQuery(".video-holder").fitVids();

		if (readCookie("hasVisitedBefore") == null){

			setTimeout(function() {
				jQuery( "#ticket-newsletter" ).trigger( "click" );
			}, 5000);

		}
	  
	  createCookie("hasVisitedBefore", "true");

});

jQuery(window).load(function() {

	jQuery('.flexslider').flexslider({
		animation: "slide",
		controlNav: false,
		slideshow: true,
		slideshowSpeed: 7000,
		smoothHeight: true
	});

	if (window.location.hash.indexOf('wpcf7') == 1) { // not 0 because # is first character of window.location.hash
		jQuery( "#ticket-newsletter" ).trigger( "click" );
	}

});

if (jQuery(window).width() > 1000) {

		if (jQuery.fn.jScrollPane) {
			jQuery(function(){jQuery('.scroll-pane').jScrollPane();});     
		}

}

jQuery('.terms-conditions').click (function(){
	var thischeck = jQuery(this);

	if ( thischeck.is(':checked') ) {
		jQuery("input.submit").removeClass("disabled");
		jQuery("input.submit").removeAttr("disabled");
	}

	else {
		jQuery("input.submit").addClass("disabled");
		jQuery("input.submit").attr("disabled", true);
	}

});

jQuery('.mobile-nav').click (function(){

	var thischeck = jQuery("nav");

	if ( thischeck.hasClass('expanded') ) {
	jQuery("nav").removeClass("expanded");
 }

 else {
	jQuery("nav").addClass("expanded");
}

return false;
});

// Scroll animation Home page
jQuery("a[href='#opt-in']").click(function() {
	jQuery("html, body").animate({ scrollTop: (jQuery('.opt-in').offset().top - 50) + '%'}, 700, "easeOutQuint");
	return false;
});

var today = jQuery.now();
var endTime = 1427342400000;
var difference = Math.floor(endTime - today) / 1000;
//difference = difference/1000;

// CountDown Homepage
jQuery('#rC').redCountdown({ preset: "white", end: today + difference  });


//Cookie Script
function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}