<?php
/**
 * Post del bloque
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>


<div class="-col-12">
    <a href="<?php echo esc_url( the_permalink( ) ); ?>">
        <article class="m-categoryItem">
            <figure class="m-categoryItem__img">
                <div class="m-crop m-crop__sizeDomino">
                    <?php the_post_thumbnail( 'large', ['class' => 'm-crop__img'] ); ?><!-- .m-crop__img -->
                </div><!-- .m-crop -->
            </figure><!-- .m-categoryItem__img -->
            <header class="m-categoryItem__header">
                <p class="m-categoryItem__cat"><?php echo esc_html( the_category_single() ); ?></p>
                <h3><?php echo esc_html( the_title() ); ?></h3>
                <p class="m-categoryItem__excerpt"> <?php echo esc_html( get_the_excerpt()); ?> </p>
            </header><!-- .m-categoryItem__header -->
        </article><!-- .m-categoryItem -->
    </a>
</div>