<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';
/**
 * Add a menu option to the footer.
 */
 function GM_footer_menu() {
  register_nav_menu('GM-footer-menu',__( 'Footer' ));
}
add_action( 'init', 'GM_footer_menu' );
/**
 * Move Jquery to footer.
 */
add_action('wp_enqueue_scripts', 'rudr_move_jquery_to_footer');  
 
function rudr_move_jquery_to_footer() {  
 	// unregister the jQuery at first
        wp_deregister_script('jquery');  
 
        // register to footer (the last function argument should be true)
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, null, true);  
 
        wp_enqueue_script('jquery');  
}