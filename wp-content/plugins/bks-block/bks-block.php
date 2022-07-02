<?php
/**
 * Plugin Name: Simple Gutenberg Block
 * Plugin URI: https://bikashrai.com
 * Description: This plugin creates a simple Gutenberg block
 * Version: 1.0.0
 * Author: Bikash Rai
 * Author URI: https://profiles.wordpress.org/bikash
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: sg-block
 * Domain Path: /languages
 *
 * @package Simple Gutenberg Block
 */

 define( 'BKS_PLUGIN_URL', plugins_url( 'bks-block' ) );
define( 'BKS_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );

function guternberg_custom_blocks(){
    //Block firont end style
    wp_register_style(
        'bks-block-front-end-styles',
        BKS_PLUGIN_URL.'/style.css',
        array('wp-edit-blocks'),
       filemtime( BKS_PLUGIN_DIR_PATH . 'style.css')
        
    );

     //Block editor  style
    wp_register_style(
        'bks-block-editor-styles',
        BKS_PLUGIN_URL.'/editor.css',
        array('wp-edit-blocks'),
       filemtime( BKS_PLUGIN_DIR_PATH . 'editor.css')
        
    );

     wp_register_script(
        'bks-block-editor.js',
        BKS_PLUGIN_URL.'/simple-block.js',
        array('wp-blocks','wp-element','wp-editor','wp-components','wp-i18n'),
       filemtime( BKS_PLUGIN_DIR_PATH . 'simple-block.js')
        
    );

register_block_type('bks-block/simple-block',array(
    'style'=>'bks-block-front-end-styles',
    'editor_style'=>'bks-block-editor-styles',
    'editor_script'=>'bks-block-editor.js'
));
}
add_action('init','guternberg_custom_blocks');