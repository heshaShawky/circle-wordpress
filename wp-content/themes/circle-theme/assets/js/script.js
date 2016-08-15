$(document).ready(function () {

    // OWL Carousel
    $("#owl-demo, #re-posts-cars").owlCarousel({

        autoPlay: false, //Set AutoPlay to 3 seconds
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]

  });
    var owl = $("#owl-demo"),
    owl2 = $("#re-posts-cars");
  // Custom Navigation Events
    $("#move-right").click(function(){
        owl.trigger('owl.next');
    });
    $("#move-left").click(function(){
        owl.trigger('owl.prev');
    })

    $("#move-right-post").click(function(){
        owl2.trigger('owl.next');
    });
    $("#move-left-post").click(function(){
        owl2.trigger('owl.prev');
    })

  // Popups
    $('.zoom-gallery').magnificPopup({
        delegate: 'a',
		type: 'image'

	});

    $("#container").mixItUp();

    /*--
     google map
     --*/

    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 14,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(29.9773051, 31.3105241), // New York

            // Disable zoom & scall in map
            scrollwheel: false,
            navigationControl: false,
            mapTypeControl: false,
            scaleControl: true,
            draggable: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,

        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('googleMap');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(29.9773051, 31.3105241),
            map: map,
            title: 'Snazzy!'
        });
    }



});
