<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package demud
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function demud_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'demud_body_classes' );

/**
 * Добавьте заголовок автоматического обнаружения pingback url для отдельных постов, страниц или вложений.
 *
 * Pingback — это технология уведомлений между сайтами. Если кто-то ссылается на твою статью, WordPress автоматически отправит уведомление (pingback) на сайт-источник.
 */
function demud_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'demud_pingback_header' );

//My function

//Отключаем стили WooCommerce
add_filter('woocommerce_enqueue_styles', '__return_empty_array');
add_theme_support('menus');
//Инициализируем меню для header и footer
register_nav_menus([
    'header-menu' => __('Header Menu', 'demud'),
    'footer-menu' => esc_html__('Footer Menu', 'demud'),
]);


