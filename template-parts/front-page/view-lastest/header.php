<?php
/**
 * Header del bloque de últimas noticias
 *
 * @package WordPress
 * @subpackage Monmedios
 */

$argumentos = array(
    'post_type' => ['post'],
    'posts_per_page' => 1,
    'meta_key'		=> 'articulo_pagina_inicio',
    'meta_value'	=> true,
    'order' => 'DESC',
    'orderby' => 'date'
);

$the_query = new WP_Query($argumentos);

$blog_info = get_bloginfo( 'name' );
?>

<div class="-row">
    <div class="-col-12">
        <?php
            if ($args['header_type'] == 'hero') {
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post(  );
    
                        get_template_part( 'template-parts/front-page/view-lastest/post-header' );
                    }
                } 
            } elseif ($args['header_type'] == 'title_on_frontpage') {

                $figure = '<figure class="m-titleSite__img">';
                $figure .= get_template_part( 'template-parts/front-page/view-lastest/icon-info' );
                $figure .= '</figure>';
                ?>
                <h1 class="m-titleSite__title">
                    <?php echo $args['view_title']; ?>
                </h1><!-- .m-titleSite__title -->
                <?php
            } else {
                ?>
                <h2 class="m-lastArticle__title">
                    <?php echo ($args['view_title'] == true) ? $args['view_title'] : esc_html( $blog_info ); ?>
                </h2><!-- .m-lastArticle__title -->
                <?php
            }
            
        ?>
    </div>
</div>