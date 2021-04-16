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
    $vers = '1.4.5';

    wp_register_style( 'index', get_template_directory_uri( ).'/style.css', '', $vers, 'all' );

    wp_enqueue_style( 'style', get_stylesheet_uri(  ) , array( 'index'), $ver, 'all' );

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


// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'status' ) );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style();
}
add_action( 'after_setup_theme', 'custom_theme_features' );