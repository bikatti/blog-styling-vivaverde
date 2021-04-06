<?php
/**
 * Vista de página
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

?>

<section class="m-page -glosario">
    <div class="m-glosario">
        <?php
        
        if (have_posts()) {
            while (have_posts()) {
                the_post(  );
                wpb_set_post_views(get_the_ID());
                
                ?> 
                <div class="m-glosario__nav">
                    <h1 class="m-glosario__title"><?php the_title(); ?></h1>
                    <h6 class="m-glosario__sub">Orden alfábetico</h6>
                    <div class="m-glosario__anchors">
                    <?php
                    $Abecedario = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];

                    foreach ($Abecedario as $letra) {
                        echo '<a href="#' . strtoupper($letra) . '" class="m-glosario__link">' . strtoupper($letra) . '</a>' ;
                    }
                            
                    ?> 
                    </div>
                </div>

                <div class="m-glosario__content">
                    <article>
                        <div class="-row">
                            <div class="-col-12">
                                <div class="m-single__content"><?php the_content( ); ?></div>
                            </div>
                        </div>
                    </article>
                </div>
                <?php 
            }
        } ?>
    </div>

</section>


<?php
get_footer();