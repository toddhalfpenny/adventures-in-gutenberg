<?php
/**
 * AIG - ES6 Inspector Controls
 *
 * Gutenberg Inspector controls block example
 *
 * @since   1.0.0
 * @package adventures-in-gutenberg
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue the block's assets for the editor.
 *
 * @since 1.0.0
 */
function aig_block_inspector_controls_editor_assets() {
	wp_enqueue_script(
		'aig-block-inspector-controls',
		plugins_url( 'block.js', __FILE__ ), // Our block's JavaScript.
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ), // Our Dependencies,.
		filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
	);
}

add_action( 'enqueue_block_editor_assets', 'aig_block_inspector_controls_editor_assets' );
