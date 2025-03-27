<?php

remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flas', 10);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);


remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);
remove_action('woocommerce_single_product_summary', 'generate_product_data', 60);
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );




add_action('demud_show_product_images', 'woocommerce_show_product_images', 20);
add_action('demud_show_product_title', 'woocommerce_template_single_title', 5);

add_action('demud_show_single_meta', 'woocommerce_template_single_meta', 40);

add_action('demud_show_single_rating', 'woocommerce_template_single_rating', 10);
add_action('demud_show_single_price', 'woocommerce_template_single_price', 10);
add_action('demud_show_single_add_to_cart', 'woocommerce_template_single_add_to_cart', 30);


//Отключение табов "Описание, "детали", "Отзывы"
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

//Удаление вывода сообщений о добавлении товара в корзину с ссылкой на переход к корзине
add_filter('wc_add_to_cart_message_html', '__return_null');

//Редирект в корзину после нажатия на кнопку "В корзину"
add_filter('woocommerce_add_to_cart_redirect', function($url) {
    return wc_get_cart_url(); // Перенаправление в корзину
});

//Убирает пробелы между ценой и символом валюты
function custom_woocommerce_price_format( $format, $currency_pos ) {
    switch ( $currency_pos ) {
        case 'left':
        case 'left_space':
            $format = '%1$s%2$s';
            break;
        case 'right':
        case 'right_space':
            $format = '%2$s%1$s';
            break;
    }
    return $format;
}
add_filter( 'woocommerce_price_format', 'custom_woocommerce_price_format', 10, 2 );




