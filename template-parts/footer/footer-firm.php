<?php
/**
 * Site Footer
 *
 * @package WordPress
 * @subpackage Monmedios
 */


$blog_info    = get_bloginfo( 'name' );
?>

<div class="m-footer__firm">
    <p class="a-footer__copyright"><?php echo '© '. date('Y') . ' ' . $blog_info ; ?><br>Desarrollado y soportado por <a href="https://monmedios.com" target="_blank">momendios.com</a></p>
    <p class="a-footer__dev"><?php printf( get_theme_mod( 'footer_text', __( 'Final de la página' ) ) ); ?></p>
</div>