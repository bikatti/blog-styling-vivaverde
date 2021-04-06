<?php
/**
 * Query de los posts del bloque de últimas noticias
 *
 * @package WordPress
 * @subpackage Monmedios
 */

$args = array(
    'post_type' => ['post'],
    'posts_per_page' => 3,
    'cat' => 10,
    'meta_key'		=> 'metodos_en_inicio',
    'meta_value'	=> true,
    'order' => 'DESC',
    'orderby' => 'date'
);

$the_query = new WP_Query($args);
$iter = 0;
?>

<div class="-row">
    <?php
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post(  );
                get_template_part( 'template-parts/front-page/category/post' );
            }
        } 
    ?>
</div>