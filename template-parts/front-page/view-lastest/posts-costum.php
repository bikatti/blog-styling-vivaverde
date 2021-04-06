<?php
/**
 * Query de los posts del bloque de últimas noticias
 *
 * @package WordPress
 * @subpackage Monmedios
 */

$args = array(
    'post_type' => ['post'],
    'posts_per_page' => 1,
    // 'cat' => 5, 
    'cat' => 8, 
    'order' => 'DESC',
    'orderby' => 'date'
);

$the_query = new WP_Query($args);
$iter = 0;
?>

<div class="-row">
    <?php
        if ($the_query->have_posts()) {
    ?>
    <div class="-col-7">
    <?php
        while ($the_query->have_posts()) {
            $the_query->the_post(  );
            ?>
                
                <a href="<?php echo esc_url( the_permalink( ) ); ?>">
                    <article class="m-bigArticle">
                        <div class="-backHalf"></div><!-- .-backHalf -->
                        <header class="m-bigArticle__header">
                            <p class="m-bigArticle__cat"><?php echo esc_html( the_category_single() ); ?></p>
                            <h3><?php echo esc_html( the_title() ); ?></h3>
                            <p class="m-bigArticle__excerpt"> <?php echo esc_html( get_the_excerpt()); ?> </p>
                        </header><!-- .m-bigArticle__header -->
                        <?php the_post_thumbnail( 'large', ['class' => 'm-bigArticle__img'] ); ?><!-- .m-bigArticle__img -->
                    </article><!-- .m-bigArticle -->
                </a>
                <?php
            }
        } 
    ?>
    </div>

    <div class="-col-5">
        <div class="-row">
            <?php get_template_part( 'template-parts/front-page/view-lastest/post-square', null, $args = ['cat_number' => 4] ); ?>
            <?php get_template_part( 'template-parts/front-page/view-lastest/post-square', null, $args = ['cat_number' => 6] ); ?>
            <?php get_template_part( 'template-parts/front-page/view-lastest/post-square', null, $args = ['cat_number' => 16] ); ?>
            <?php get_template_part( 'template-parts/front-page/view-lastest/post-square', null, $args = ['cat_number' => 7] ); ?>
        </div>
    </div>
</div>