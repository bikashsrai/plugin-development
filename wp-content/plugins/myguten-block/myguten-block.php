<?php
/***
 * Plugin Name:My Block using Guternberg
 * Description: This is custom block plugin using es6
 * Author:Bikash Rai
 * 
 */

 function my_guternberg_custom_blocks(){
    //Register javascript file build /index.js
     wp_register_script(
        'my-custom-block',
        plugins_url('build/index.js',__FILE__),
        array('wp-blocks','wp-element','wp-editor','wp-components','wp-i18n'),
       filemtime(plugin_dir_path(__FILE__). 'build/index.js')
        
    );
   //Register editor sytyle  src/editor.css
wp_register_style(
        'my-custom-block-editor-style',
        plugins_url('src/editor.css',__FILE__),
        array('wp-edit-blocks'),
       filemtime(plugin_dir_path(__FILE__). 'src/editor.css')
        
    );
    //Register front end block style src/style.css
wp_register_style(
        'my-custom-block-frontend-style',
        plugins_url('src/style.css',__FILE__),
        array(),
       filemtime(plugin_dir_path(__FILE__). 'src/style.css')
        
    );
    //Register your block 
   register_block_type('myguten-block/test-block',array(
      'editor_script'=>'my-custom-block',
      'editor_style'=>'my-custom-block-editor-style',
    'style'=>'my-custom-block-frontend-style'
));
}
add_action('init','my_guternberg_custom_blocks');