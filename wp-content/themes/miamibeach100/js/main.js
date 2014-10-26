jQuery(document).ready(function() {

  jQuery('a.lightbox').nivoLightbox();
  jQuery("input.submit").attr("disabled", true);

  if (!(Modernizr.touch)) {   
    jQuery(window).stellar({horizontalScrolling: false, hideDistantElements: false});
  }

  if (jQuery(window).width() > 1000) {

    var listCount = jQuery(".horizontal-slider ul.slides li").length;
    listCount = (listCount - 1) * 557;
    var finalCount = listCount + 540;
    jQuery(".horizontal-slider ul.slides").width(finalCount);

  }

  //fitvids
  jQuery(".video-holder").fitVids();

});

jQuery(window).load(function() {
  jQuery('.flexslider').flexslider({
    animation: "slide",
    controlNav: false,
    slideshow: true,
    slideshowSpeed: 7000,
    smoothHeight: true
  });
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