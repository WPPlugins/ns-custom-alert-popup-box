<?php
/*
Plugin Name: NS WordPress Custom Alert Popup Box
Plugin URI: https://wordpress.org/plugins/ns-custom-alert-popup-box/
Description: Create a Layer the first access to site
Version: 1.2.0
Author: NsThemes
Author URI: http://nsthemes.com
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! defined( 'NS_LAYER_COOKIE_PLUGIN_DIR' ) )
    define( 'NS_LAYER_COOKIE_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );

if ( ! defined( 'NS_LAYER_COOKIE_PLUGIN_URL' ) )
    define( 'NS_LAYER_COOKIE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );


setcookie('first_access_my_user', 1, time() + (86400), "/"); // (86400 * 30) 86400 = 1 day


/* *** include css admin *** */
function ns_wcapb_css_admin( $hook ) {
	wp_enqueue_style('ns-wcapb-style-admin', NS_LAYER_COOKIE_PLUGIN_URL . '/css/style.css');
}
add_action( 'admin_enqueue_scripts', 'ns_wcapb_css_admin' );

/* *** include js admin *** */
function ns_wcapb_js_admin( $hook ) {
	wp_enqueue_script('ns-custom-admin-script-wcapb', NS_LAYER_COOKIE_PLUGIN_URL . '/js/custom-admin.js', array('jquery'));
}

add_action( 'admin_enqueue_scripts', 'ns_wcapb_js_admin' );

/* *** include css *** */
function ns_wcapb_css( $hook ) {
	wp_enqueue_style('ns-wcapb-style-single-product', NS_LAYER_COOKIE_PLUGIN_URL . '/css/ns-custom-alert.css');
}

add_action( 'wp_enqueue_scripts', 'ns_wcapb_css' );

/* *** include js *** */
function ns_wcapb_js( $hook ) {
	wp_enqueue_script('ns-custom-script', NS_LAYER_COOKIE_PLUGIN_URL . '/js/custom.js', array('jquery'));
}

function ns_wcapb_js_inline () {
	 ?>
    <script>
		jQuery(document).ready(function( $ ) {
			$('#ns-custom-layer-box').delay(<?php echo get_option('ns_wcapb_delay'); ?>).fadeIn();
			$('#ns-wcapb-container').delay(<?php echo get_option('ns_wcapb_delay'); ?>).fadeIn();
		});
	</script>
	<?php
}

if (!isset($_COOKIE['first_access_my_user'])) {
	// First access
	add_action( 'wp_enqueue_scripts', 'ns_wcapb_js' );
	add_action('wp_head', 'ns_wcapb_js_inline');
} else {
	// Other access
}

/* *** include admin option *** */
require_once( NS_LAYER_COOKIE_PLUGIN_DIR.'/ns-wordpress-custom-alert-popup-box-admin.php');

function ns_wcapb_default_options() {
    add_option('ns_wcapb_text', 'Hello Word!');
    add_option('ns_wcapb_delay', 0);
}
 
register_activation_hook( __FILE__, 'ns_wcapb_default_options');


function ns_wcapb_free_add_option_page() {
    add_menu_page('NS Popup Box', 'Popup Box', 'manage_options', 'ns-wordpress-custom-alert-popup-box-free', 'ns_wcapb_update_options_form', NS_LAYER_COOKIE_PLUGIN_URL.'/img/backend-sidebar-icon.png', 60);
}
 
add_action('admin_menu', 'ns_wcapb_free_add_option_page');

function ns_wcapb_free_layer(){
	echo '<div id="ns-custom-layer-box"></div><div id="ns-wcapb-container">'.do_shortcode(get_option('ns_wcapb_text')).'</div>';
}
add_action( 'wp_footer', 'ns_wcapb_free_layer' );

?>