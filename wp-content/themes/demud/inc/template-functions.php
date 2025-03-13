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
function demud_body_classes($classes)
{
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}

add_filter('body_class', 'demud_body_classes');

/**
 * Добавьте заголовок автоматического обнаружения pingback url для отдельных постов, страниц или вложений.
 *
 * Pingback — это технология уведомлений между сайтами. Если кто-то ссылается на твою статью, WordPress автоматически отправит уведомление (pingback) на сайт-источник.
 */
function demud_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}

add_action('wp_head', 'demud_pingback_header');

//My function

// Отключаем стили WooCommerce
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// Поддержка меню | Инициализируем меню для header и footer
add_theme_support('menus');
register_nav_menus([
    'header-menu' => esc_html__('Header Menu', 'demud'),
    'company-menu' => esc_html__('Footer Company Menu', 'demud'),
    'document-menu' => esc_html__('Footer Document Menu', 'demud'),
]);

// Переопределяем закрывающий тег </a> в html на уровень выше
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 5);

// Убираем распродажу
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);

// Переопределяем тег в карточке товара на <h3>
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
function h3_template_loop_product_title() {
    echo '<h3 class="product-card__title">' . get_the_title() . '</h3>';
}
add_action('woocommerce_shop_loop_item_title', 'h3_template_loop_product_title', 10);


//TODO:Подумай за оптимизацию картинок для мобилки.

// Для каждого размера экрана отдает картинку определенного размера ХОРОШО ДЛЯ ОПТИМИЗАЦИИ
add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );




