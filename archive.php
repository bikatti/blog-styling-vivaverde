<?php
/**
 * Index
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

$hay_post_principal = false;
$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>

    <?php if ( is_tax() || is_archive() ) : ?>
        <section class="m-archive__header">
            <div class="-container">
                <?php the_archive_title( '<h1>', '</h1>' ); ?>
            </div><!-- .-container -->
        </section><!-- .page-header -->
    <?php endif; ?>

    <section class="m-archive__articleBlock">
        <div class="-container">
            <div class="row -flex -flexColumn">
                <?php 
                while ( have_posts() ) :
                    the_post();

                    if ( get_field('destacado_en_categoria') == true && $hay_post_principal == false ) {
                        get_template_part( 'template-parts/archive/content' );
                        $hay_post_principal = true;
                    } else {
                        get_template_part( 'template-parts/front-page/category/post' );
                    }
                     
                endwhile; 
                ?>
            </div>
            <div class="row">
                <div class="-col-12">
                    <div class="m-pagination">
                        <?php posts_nav_link( ' ', 'Anterior', 'Siguiente' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<?php 
    get_template_part( 
        'template-parts/content/random-posts', 
        null, 
        $args = [
            'className' => '-single',
            'header_type' => '',
            'view_title'  => 'Otros temas'
        ] 
    ); 
?>

<?php get_footer(); ?>