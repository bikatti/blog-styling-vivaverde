<?php
/**
 * Primer bloque sobre las últimas noticias
 *
 * @package WordPress
 * @subpackage Monmedios
 */
?>

<section class="m-categoryList">
    <div class="-container">
        <div class="-row">
            <div class="-col-12">
                <ul>
                    <li><span class="m-header__link -mZero" id="categoryModal">Categorías</span><!-- .m-header__link --></li>
                    <li><span class="m-header__link -mZero" id="tagsModal">Etiquetas</span><!-- .m-header__link --></li>

                    <?php
                        if ( has_nav_menu( $args['menu_slug'] ) ) {
                            wp_nav_menu([
                                'theme_location'  => $args['menu_slug'],
                                'menu_class'      => 'm-footer__menu -medium',
                                'container' => 'ul'
                            ]);
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>