<?php


function register_new_menu() {
    register_nav_menus( 
        array(
            'menu_category_one' => 'Menú Principal'
        )
    );
}

add_action('after_setup_theme', 'register_new_menu');

/** -----------------------------------
 *    Nuevos bloques para gutenberg
 * ---------------------------------- */

// function mlg_register_block() {
//     wp_register_script(
//         'blocks-js',
//         get_theme_file_uri( 'assets/js/blocks.js' ),
//         array( 'wp-blocks', 'wp-element' )
//     );

//     register_block_type(
//         'monlogo/caja',
//         array('editor_script' => 'blocks-js')
//     );
// }

// add_action( 'init', 'mlg_register_block' );


function login_logo_resize() { 
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            width: 245px !important;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'login_logo_resize' );