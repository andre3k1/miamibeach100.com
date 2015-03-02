var stylez = 
[{"featureType":"landscape","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]}]
function initialize() {

    var markerURL = jQuery("#map-canvas").attr("data-marker");

    var styledMap = new google.maps.StyledMapType(stylez, {
        name: "Styled Map"
    });
    var myLatlng = new google.maps.LatLng(25.7775778, -80.1320049);
    var mapOptions = {
        scrollwheel: false,
        scaleControl: true,
        center: myLatlng,
        zoom: 12,
       	scrollwheel: false,
       	draggable: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var mapCorp = new google.maps.Map(document.getElementById("north-map"), mapOptions, stylez);

    var map = mapCorp;

    google.maps.event.addDomListener(window, "resize", function() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center); 
    });

    mapCorp.mapTypes.set('map_style', styledMap);
    mapCorp.setMapTypeId('map_style');
    var image = markerURL;
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: mapCorp,
        title: "Miami Beach 100",
        icon: image,
        url: "https://goo.gl/maps/XJ7Mt"
    })
    google.maps.event.addListener(marker, 'click', function() {
    	window.open(marker.url);
	});

}

function initialize_b() {

    var markerURL = jQuery("#map-canvas").attr("data-marker");
    var styledMap = new google.maps.StyledMapType(stylez, {
        name: "Styled Map"
    });
    var myLatlng = new google.maps.LatLng(25.7775778, -80.1320049);
    var mapOptions = {
        scrollwheel: false,
        scaleControl: true,
        center: myLatlng,
        zoom: 12,
        scrollwheel: false,
        draggable: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var mapCorp = new google.maps.Map(document.getElementById("south-map"), mapOptions, stylez);

    var map = mapCorp;

    google.maps.event.addDomListener(window, "resize", function() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center); 
    });

    mapCorp.mapTypes.set('map_style', styledMap);
    mapCorp.setMapTypeId('map_style');
    var image = markerURL;
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: mapCorp,
        title: "Miami Beach 100",
        icon: image,
        url: "https://goo.gl/maps/XJ7Mt"
    })
    google.maps.event.addListener(marker, 'click', function() {
        window.open(marker.url);
    });

}

/* start the map */
initialize();
initialize_b();