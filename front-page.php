<?php
/**
 * Página principal del wordpress
 *
 * @package Hacktzi
 * @subpackage blog-styling
 */

get_header();

get_template_part( 
    'template-parts/category-list/category-list-costum', 
    null, 
    $args = [ 'menu_slug' => 'menu_category_one'] 
);

?>

<div class="m-titleSite">
    <div class="-container">
        <?php
            $title_home = get_theme_mod( 'h1_home_text', __( 'Título' ) );
            
            get_template_part( 
                'template-parts/front-page/view-lastest/header', 
                null, 
                $args = [
                    'header_type' => 'title_on_frontpage',
                    'view_title' => $title_home
                ]
            );
        ?>
    </div>
</div>

<?php

get_template_part( 
    'template-parts/front-page/view-lastest/view-lastest-costum', 
    null, 
    $args = [
        'header_type' => 'hero',
    ] 
);

$title_three = get_option( 'title_third_block_text', __( 'Título' ) );
get_template_part( 
    'template-parts/front-page/category/category-costum',
    null,
    $args = [
        'title' => $title_three
    ]
);

$title_four = get_option( 'title_fourth_block_text', __( 'Título' ) );
get_template_part( 
    'template-parts/front-page/popular/popular',
    null,
    $args = [
        'title' => $title_four
    ]
);

get_footer();
