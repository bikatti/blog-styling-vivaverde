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
    'cat' => $args['cat_number'],
    'order' => 'DESC',
    'orderby' => 'date'
);

$the_query = new WP_Query($args);
?>

<?php
while ($the_query->have_posts()) {
    $the_query->the_post(  );
    ?>
        <div class="-col-6 -col-md-6 -col-sm-6">
            <a href="<?php echo esc_url( the_permalink( ) ); ?>">
                <article class="m-smallArticle">
                    <div class="m-smallArticle__figure">
                        <?php the_post_thumbnail( 'large', ['class' => 'm-smallArticle__img'] ); ?><!-- .m-smallArticle__img -->
                    </div><!-- .m-smallArticle__header -->
                    <p class="m-smallArticle__cat"><?php echo esc_html( the_category_single() ); ?></p>
                    <h3><?php echo esc_html( the_title() ); ?></h3>
                </article><!-- .m-smallArticle -->
            </a>
        </div><!-- .-col-6.-col-md-6 -->
<?php
}
?>