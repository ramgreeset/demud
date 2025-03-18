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

add_action('demud_show_product_images', 'woocommerce_show_product_images', 20);
add_action('demud_show_product_title', 'woocommerce_template_single_title', 5);


//Отключение табов "Описание, "детали", "Отзывы"
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);



