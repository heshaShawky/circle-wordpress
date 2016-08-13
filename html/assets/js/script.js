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

});
