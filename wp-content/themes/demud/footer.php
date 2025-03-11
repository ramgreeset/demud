<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demud
 */

?>

<footer class="footer">
    <div class="container footer__container">
        <span class="footer__copy">&copy; 2025 DEMUD. Все права защищены.</span>

        <ul class="footer__list">
            <li class="footer__list-item">
                <a class="footer__list-link" href="">Оптовикам</a>
            </li>
            <li class="footer__list-item">
                <a class="footer__list-link" href="">Презентация</a>
            </li>
            <li class="footer__list-item">
                <a class="footer__list-link" href="">Политика конфиденциальности</a>
            </li>
        </ul>
    </div>
</footer>


	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'demud' ), 'demud', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
