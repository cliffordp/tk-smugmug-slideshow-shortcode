<?php

namespace TK_SmugMug_Slideshow_Shortcode;

/*
Plugin Name: TK SmugMug Slideshow Shortcode
Plugin URI: https://wordpress.org/plugins/tk-smugmug-slideshow-shortcode/
Description: Adds <strong>[smugmug-slideshow]</strong> shortcode. Uses Shortcake (Shortcode UI) plugin. -- My <a href="https://github.com/cliffordp/chrome-ext-copy-smugmug-album-key/" target="_blank">Copy SmugMug Album Key Chrome extension</a> helps me easily find the AlbumKey required to use this shortcode; it might come in handy for you too. -- Unless you're embedding another user's SmugMug galleries, you'll need to <a href="https://secure.smugmug.com/signup?Coupon=vGSrlGb7FH6Cs" target="_blank">get your own SmugMug account</a>. Sign up via my link to support me & get 20% off your new subscription!
Version: 1.7
Author: TourKick (Clifford Paulick)
Author URI: https://tourkick.com/
License: GPL version 3 or any later version
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: tk-smugmug-slideshow-shortcode
*/

/* IDEAS:
- Height: https://stackoverflow.com/a/19928835/893907, etc.
- Settings page for customizing defaults
- Widget and/or just enable shortcodes in widget (but then no UI)
- frameborder and scrolling not valid in HTML5; use CSS instead
- customizable text if iframes not supported in browser
- Block Editor
*/


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Composer's autoloader
require_once( 'vendor/autoload.php' );

// used by core plugin and by add-on implementations of Freemius
define( 'TK_SMUGMUG_SS_FREEMIUS_START_FILE', dirname( __FILE__ ) . '/vendor/freemius/wordpress-sdk/start.php' );

function tk_smugmug_ss_freemius() {
	global $tk_smugmug_ss_freemius;

	if (
		! isset( $tk_smugmug_ss_freemius )
		&& defined( 'TK_SMUGMUG_SS_FREEMIUS_START_FILE' )
		&& file_exists( TK_SMUGMUG_SS_FREEMIUS_START_FILE )
	) {
		// Include Freemius SDK.
		require_once TK_SMUGMUG_SS_FREEMIUS_START_FILE;

		$tk_smugmug_ss_freemius = fs_dynamic_init(
			array(
				'id'             => '1072',
				'slug'           => 'tk-smugmug-slideshow-shortcode',
				'type'           => 'plugin',
				'public_key'     => 'pk_fa39b8e6d31c4e5e424f02aac35d4',
				'is_premium'     => false,
				'has_addons'     => false,
				'has_paid_plans' => false,
				'menu'           => array(
					'first-path' => 'plugins.php',
				),
			)
		);
	}

	return $tk_smugmug_ss_freemius;
}


function tk_smugmug_ss_freemius_terms_agreement_text() {
	return sprintf(
		__( 'By using this plugin, you agree to %s and %s Terms.', 'tk-smugmug-slideshow-shortcode' ),
		'<a target="_blank" href="https://tourkick.com/terms/?utm_source=terms_agreement_text&utm_medium=free-plugin&utm_term=TK%20SmugMug%20Slideshow%20Shortcode%20plugin&utm_campaign=TK%20SmugMug%20Slideshow%20Shortcode%20plugin">TourKick\'s</a>',
		'<a target="_blank" href="https://freemius.com/terms/">Freemius\'</a>'
	);
}

// Freemius: customize the new user message
function tk_smugmug_ss_freemius_custom_connect_message(
	$message,
	$user_first_name,
	$plugin_title,
	$user_login,
	$site_link,
	$freemius_link
) {
	$tk_custom_message = sprintf(
		__fs( 'hey-x' ) . '<br><br>' . __( 'The <strong>%2$s</strong> plugin is ready to go! Want to help make %2$s more awesome? Securely share some data to get the best experience and stay informed.', 'tk-smugmug-slideshow-shortcode' ),
		$user_first_name,
		$plugin_title,
		'<strong>' . $user_login . '</strong>',
		$site_link,
		$freemius_link
	);

	$tk_custom_message .= '<br><small>' . tk_smugmug_ss_freemius_terms_agreement_text() . '</small>';

	return $tk_custom_message;
}

// Init Freemius.
tk_smugmug_ss_freemius();
do_action( 'tk_smugmug_ss_freemius_loaded' );

tk_smugmug_ss_freemius()->add_filter( 'connect_message', 'tk_smugmug_ss_freemius_custom_connect_message', 10, 6 );

$tk_smugmug_slideshow_shortcode = new Main;
add_action( 'init', array( $tk_smugmug_slideshow_shortcode, 'shortcode' ) );