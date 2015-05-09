/**
 * enqueue script
 */
function theme_child_scripts() {
	wp_enqueue_script( 'carousel-analytics',  get_stylesheet_directory_uri() . '/js/carousel-analytics.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_child_scripts' );
