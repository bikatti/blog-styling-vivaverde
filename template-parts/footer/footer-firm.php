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
    <p class="a-footer__copyright"><?php echo '© '. date('Y') . ' ' . $blog_info ; ?><br>InfoBlog Creado y soportado por <a href="https://monmedios.com">momendios.com</a></p>
    <p class="a-footer__dev">Hecho con ❤</p>
</div>