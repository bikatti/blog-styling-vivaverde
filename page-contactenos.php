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
    <div class="-container">
        <div class="-row">
            <div class="-col-4">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(  );
                        wpb_set_post_views(get_the_ID());

                        ?>
                        <span class="-hide" id="categoryModal">etiqueta</span>
                        <span class="-hide" id="tagsModal">etiqueta</span>

                        <article><?php get_template_part( 'template-parts/content/content' ); ?></article>
                        <?php 
                    }
                } 
                ?>
            </div>

            <div class="-col-7">
                <div class="m-form__contact">
                    <?php echo do_shortcode('[contact-form-7 id="104" title="Formulario de contacto de la página"]') ?>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();