
function delayedAlert() {
  var timeoutID = window.setTimeout(expandLogo, 800);
}
function expandLogo() {
  jQuery('.tagline, .page-title').addClass('is-expanded');
}
delayedAlert();

if (Modernizr.touch) {
	jQuery('.animscroll').removeClass('animscroll');
}


jQuery(document).ready(function() {
	jQuery('.animscroll, .animscroll li, article').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated fadeInUp', // Class to add to the elements when they are visible
	    offset: 300    
	 });

	//SPECIAL ANIMATION ON EVENTS PAGE
	jQuery('.dont-forget').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
	    offset: 300    
	 });
	jQuery('.animscroll-iphone').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated fadeInLeft', // Class to add to the elements when they are visible
	    offset: 300    
	 });
});