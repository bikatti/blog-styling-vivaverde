<?php
/**
 * Artículos del wordpress
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

<section class="m-single">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(  );
            wpb_set_post_views(get_the_ID());

            ?> 
            <div class="-container"><?php get_template_part( 'template-parts/content/header' ); ?></div><!-- .-container -->
            <div class="-containerFluid">
                <div class="-row">
                    <div class="m-single__img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                </div>
            </div>
            <div class="-container"><article><?php get_template_part( 'template-parts/content/content' ); ?></article></div>
            <?php 
        }
    } ?>
</section>

<?php 
    $title_random = get_theme_mod( 'title_random_posts_text', __( 'Artículos randoms' ) );

    get_template_part( 
        'template-parts/content/random-posts', 
        null, 
        $args = [
            'header_type' => '',
            'view_title'  => $title_random
        ] 
    ); 
?>

<?php
get_footer();