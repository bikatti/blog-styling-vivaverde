<?php

/** -----------------------------------
 *             Pre-settings
 * ---------------------------------- */

function register_new_menu() {
    register_nav_menus( 
        array(
            'menu_category_one' => 'Menú Principal'
        )
    );
}

add_action('after_setup_theme', 'register_new_menu');


function register_glossary_js() {
    $vers = '1.2.0';
    if (is_page('glosario')) {
        wp_enqueue_script( 'glossary', get_theme_file_uri( '/assets/js/glossary.js' ), '', $vers, true );
    }
}

add_action( 'wp_enqueue_scripts', 'register_glossary_js' );


/** -----------------------------------
 *    Resize of logo on Login panel
 * ---------------------------------- */
function login_logo_resize() { 
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            width: 245px !important;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'login_logo_resize' );