<?php
/**
 * Vista de página
 *
 * @package Hacktzi
 * @subpackage blog-styling
 */

get_header();

if (is_page('glosario')) {
    get_template_part( 
        'template-parts/category-list/category-list-costum', 
        null, 
        $args = [ 'menu_slug' => 'menu_category_one'] 
    );
}
?>

<section class="m-page">
    <?php
    
    if (have_posts()) {
        while (have_posts()) {
            the_post(  );
            wpb_set_post_views(get_the_ID());

            ?> 
            <div class="-containerFluid">
                <div class="-row">
                    <div class="m-single__img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                </div>
            </div>
            <span class="-hide" id="categoryModal">etiqueta</span>
            <span class="-hide" id="tagsModal">etiqueta</span>

            <div class="-container"><article><?php get_template_part( 'template-parts/content/content' ); ?></article></div>
            <?php 
        }
    } ?>
</section>


<?php
get_footer();