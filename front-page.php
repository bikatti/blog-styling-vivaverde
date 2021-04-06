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
            get_template_part( 
                'template-parts/front-page/view-lastest/header', 
                null, 
                $args = [
                    'header_type' => 'title_on_frontpage',
                    'view_title' => 'InfoBlog'
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

get_template_part( 
    'template-parts/front-page/category/category-costum',
    null,
    $args = [
        'title' => 'Métodos y Estudios'
    ]
);

get_template_part( 
    'template-parts/front-page/popular/popular',
    null,
    $args = [
        'title' => 'Los más leídos'
    ]
);

get_footer();
