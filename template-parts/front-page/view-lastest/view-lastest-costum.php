<?php
/**
 * Primer bloque sobre las últimas noticias
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>

<section class="m-lastArticle">
    <div class="-container">
        <?php 
        get_template_part( 'template-parts/front-page/view-lastest/header', null, $args );

        get_template_part( 
            'template-parts/front-page/view-lastest/header',
            null, 
            $args = [
                'header_type' => '',
                'view_title'  => 'Áreas de Desarrollo'
            ] 
        );
        
        get_template_part( 'template-parts/front-page/view-lastest/posts-costum' );
        ?>
    </div>
</section>