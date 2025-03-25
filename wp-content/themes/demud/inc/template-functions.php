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
    'services-menu' => esc_html__('Footer Services Menu', 'demud'),
    'document-menu' => esc_html__('Footer Document Menu', 'demud'),
]);

// Убираем распродажу
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);


//Убирает <a> обертку
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
//Открепляет изображения от хука для кастомизации
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
//Убирает рейтинг
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

//Свои хуки с тегами <a> для кастомизации карточек товара
add_action('demud_open_link', 'woocommerce_template_loop_product_link_open', 10);
add_action('demud_close_link', 'woocommerce_template_loop_product_link_close', 5);


// Переопределяет тег в карточке товара на <h3>
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
function h3_template_loop_product_title()
{
    echo '<h3 class="product-card__title">' . get_the_title() . '</h3>';
}

add_action('woocommerce_shop_loop_item_title', 'h3_template_loop_product_title', 10);


add_filter('woocommerce_get_price_html', function ($price_html, $product) {
    // Проверяем, есть ли у товара скидка
    if ($product->is_on_sale() && $product->get_regular_price()) {
        $regular_price = wc_get_price_to_display($product, ['price' => $product->get_regular_price()]); // Старая цена
        $sale_price = wc_get_price_to_display($product, ['price' => $product->get_price()]); // Новая цена
        $currency = get_woocommerce_currency_symbol(); // Символ валюты

        // Убираем дробную часть, если число целое
        $regular_price = floor($regular_price) == $regular_price ? number_format($regular_price, 0, ',', ' ') : number_format($regular_price, 2, ',', ' ');
        $sale_price = floor($sale_price) == $sale_price ? number_format($sale_price, 0, ',', ' ') : number_format($sale_price, 2, ',', ' ');

        // Формируем HTML с нужными классами
        $price_html = '<span class="price">
            <del aria-hidden="true"><span class="woocommerce-Price-amount amount price__old"><bdi>' . $regular_price . '&nbsp;<span class="woocommerce-Price-currencySymbol">' . $currency . '</span></bdi></span></del>
            <ins aria-hidden="true"><span class="woocommerce-Price-amount amount price__new"><bdi>' . $sale_price . '&nbsp;<span class="woocommerce-Price-currencySymbol">' . $currency . '</span></bdi></span></ins>
        </span>';
    }

    return $price_html;
}, 10, 2);


//Отключение знаков после запятой в цене товара
add_filter('woocommerce_price_trim_zeros', 'remove_decimal_points');
function remove_decimal_points($trim)
{
    return true;
}

//TODO:Подумай за оптимизацию картинок для мобилки. Восстанови wp_calculate_image_srcset_meta

// Для каждого размера экрана отдает картинку определенного размера ХОРОШО ДЛЯ ОПТИМИЗАЦИИ
add_filter('wp_calculate_image_srcset_meta', '__return_null');


/**
 * Хуки для demud/woocommerce/archive-product-php
 */
//Открепляет счетчик товаров на странице
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

//Переопределяем хук хлебных крошек для отображения в актуальном месте на сайте
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_action('demud_before_shop_loop_header', 'woocommerce_breadcrumb', 20);

remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);


//Открепляет фильтры
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
add_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);


//todo: В функции woocommerce_template_loop_product_link_open добавь класс product-card__header через фильтры а не правками в кор
//todo: Найти и переопределить ins для карточек товара

//Вешает кастомный класс breadcrumbs__list на тег <nav> у хлебных крошек
add_filter('woocommerce_breadcrumb_defaults', function ($defaults) {
    $defaults['wrap_before'] = '<nav class="woocommerce-breadcrumb breadcrumbs__list" aria-label="Breadcrumb">';
    return $defaults;
});

//Меняем текст в фильтрации списка на странице магазина
function custom_woocommerce_catalog_orderby($options)
{
    $options['menu_order'] = 'По умолчанию'; // Изменяем "Default" на "По умолчанию"
    return $options;
}

add_filter('woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby');

add_filter('woocommerce_single_product_image_html', 'custom_wc_product_image_class', 10, 2);

function custom_wc_product_image_class($html, $post_id)
{
    $html = str_replace('<a href=', '<a class="custom-class" href=', $html);
    return $html;
}

//Добавляет класс swiper-slide к фото на странице деталки
add_filter('woocommerce_single_product_image_thumbnail_html', function ($html, $attachment_id) {
    // Добавляем класс `swiper-slide` в div
    $html = str_replace('class="woocommerce-product-gallery__image"', 'class="woocommerce-product-gallery__image swiper-slide"', $html);
    return $html;
}, 10, 2);

//Убирает нарезку изображений по размерам
function disable_woocommerce_image_sizes()
{
    remove_image_size('woocommerce_thumbnail'); // Размер для каталога (300x300)
    remove_image_size('woocommerce_single'); // Размер для страницы товара (600x600)
    remove_image_size('woocommerce_gallery_thumbnail'); // Миниатюра галереи (100x100)
}

add_action('init', 'disable_woocommerce_image_sizes');


//Переопределяем классы и стили для рейтинга
add_filter('woocommerce_product_get_rating_html', function ($html, $rating, $count) {
    if ($rating > 0) {
        $label = $rating;
        $html = '<span class="rating__count">' . esc_html($label) . '</span>';
    }
    return $html;
}, 10, 3);

//Добавление классов к инпуту в деталке для работы счетчика
add_filter('woocommerce_quantity_input_args', function ($args, $product) {
    $args['classes'] = array_merge($args['classes'], ['input-number__field', 'js-input-field']);
    return $args;
}, 10, 2);

//Добавляем класс к тегу <a>
function woocommerce_template_loop_category_link_open( $category ) {
    $category_term = get_term( $category, 'product_cat' );
    $category_name = ( ! $category_term || is_wp_error( $category_term ) ) ? '' : $category_term->name;

    /* translators: %s: Category name */
    echo '<a class="category-card" aria-label="' . sprintf( esc_attr__( 'Visit product category %1$s', 'woocommerce' ), esc_attr( $category_name ) ) . '" href="' . esc_url( get_term_link( $category, 'product_cat' ) ) . '">';
}

function woocommerce_template_loop_category_title( $category ) {
    ?>
    <h3 class="woocommerce-loop-category__title category-card__title">
        <?php
        echo esc_html( $category->name );

        if ( $category->count > 0 ) {
            // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            echo apply_filters( 'woocommerce_subcategory_count_html', ' <mark class="count">(' . esc_html( $category->count ) . ')</mark>', $category );
        }
        ?>
    </h3>
    <?php
}

//Убираем кол-во элементов в title категорий
function remove_woocommerce_category_count() {
    return '';
}
add_filter( 'woocommerce_subcategory_count_html', 'remove_woocommerce_category_count' );


@include_once('hooks/custom-content-single-products.php');

