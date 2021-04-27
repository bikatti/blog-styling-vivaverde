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

        $title_two = get_option( 'title_second_block_text', __( 'Título' ) );
        get_template_part( 
            'template-parts/front-page/view-lastest/header',
            null, 
            $args = [
                'header_type' => '',
                'view_title'  => $title_two
            ] 
        );
        
        get_template_part( 'template-parts/front-page/view-lastest/posts-costum' );
        ?>
    </div>
</section>