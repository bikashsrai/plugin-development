<?php
/**
 * Plugin Name: Simple Gutenberg Block
 * Plugin URI:        https://bishalgc.com/aquilla-features/
 * Description:       Adds Gutenberg Blocks.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Bishal GC
 * Author URI:        https://bishalgc.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       sg-block
 * Domain Path:       /languages
 */

define( 'SG_PLUGIN_URL', plugins_url( 'sg-block' ) );
define( 'SG_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );

function gutenberg_custom_blocks() {

	// Block front end style
	wp_register_style(
		'sg-block-front-end-styles',
		SG_PLUGIN_URL . '/style.css',
		array( 'wp-edit-blocks' ),
		filemtime( SG_PLUGIN_DIR_PATH . 'style.css' )
	);


	// Block editor style
	wp_register_style(
		'sg-block-editor-styles',
		SG_PLUGIN_URL . '/editor.css',
		array( 'wp-edit-blocks' ),
		filemtime( SG_PLUGIN_DIR_PATH . 'editor.css' )
	);

	wp_register_script(
		'sg-block-editor.js',
		SG_PLUGIN_URL . '/simple-block.js',
		array(
			'wp-blocks',
			'wp-element',
			'wp-editor',
			'wp-components',
			'wp-i18n'
		),
		filemtime( SG_PLUGIN_DIR_PATH . 'simple-block.js' )
	);

	register_block_type( 'sg-block/simple-block', array(
		'style'         => 'sg-block-front-end-styles',
		'editor_style'  => 'sg-block-editor-styles',
		'editor_script' => 'sg-block-editor.js'
	) );

}

add_action( 'init', 'gutenberg_custom_blocks' );