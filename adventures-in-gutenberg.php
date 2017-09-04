<?php
/**
 * Plugin Name: Adventure in Gutenberg
 * Plugin URI: https://github.com/toddhalfpenny/adventures-in-gutenberg
 * Description: Hopefully some decent example blocks of my dabbling in Gutenberg blocks
 * Author: toddhalfpenny
 * Author URI: https://toddhalfpenny.com/
 * Version: 1.0.0
 * License: GPL3+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @package adventures-in-gutenberg
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Define global constants.
 *
 * @since 1.0.0
 */
// Plugin version.
if ( ! defined( 'GB_VERSION' ) ) {
	define( 'GB_VERSION', '1.0.0' );
}
if ( ! defined( 'GB_NAME' ) ) {
	define( 'GB_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}
if ( ! defined( 'GB_DIR' ) ) {
	define( 'GB_DIR', WP_PLUGIN_DIR . '/' . GB_NAME );
}
if ( ! defined( 'GB_URL' ) ) {
	define( 'GB_URL', WP_PLUGIN_URL . '/' . GB_NAME );
}

/* Inspector Controls*/
require_once( GB_DIR . '/blocks/inspector-controls/index.php' );

