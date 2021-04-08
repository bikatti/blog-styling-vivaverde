<?php
/**
 * Vista de página de contáctenos
 *
 * @package Hacktzi
 * @subpackage blog-styling
 */

get_header();
?>

<section class="m-page -contact">
    <div class="-row">

        <?php
        
        if (have_posts()) {
            while (have_posts()) {
                the_post(  );
                wpb_set_post_views(get_the_ID());

                ?>
                <span class="-hide" id="categoryModal">etiqueta</span>
                <span class="-hide" id="tagsModal">etiqueta</span>

                <div class="-container"><article><?php get_template_part( 'template-parts/content/content' ); ?></article></div>
                <?php 
            }
        } ?>
    </div>
</section>

<?php
get_footer();