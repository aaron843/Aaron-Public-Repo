
jQuery(document).on( 'jp_carousel.selectSlide', '.jp-carousel-wrap', function( event, slides ) {

// pass value to google analytics
ga('create', 'UA-9999999-1', 'example.com');
ga('send', 'pageview', { 'page': location.pathname + location.search + location.hash});	
	
} );
