<?php
/**
 * Primer bloque sobre las últimas noticias
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>

<section class="m-category">
    <div class="-container">
        <?php get_template_part( 'template-parts/front-page/category/header', null, $args ); ?>
        <?php get_template_part( 'template-parts/front-page/category/posts' ); ?>
    </div>
</section>