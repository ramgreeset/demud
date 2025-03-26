<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

defined('ABSPATH') || exit;
global $product;
// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding.
if (!is_a($product, WC_Product::class) || !$product->is_visible()) {
    return;
}
?>

<div <?php wc_product_class('product-card', $product); ?>>

    <?php
    /**
     * Hook: woocommerce_before_shop_loop_item.
     *
     * @hooked woocommerce_template_loop_product_link_open - 10 - disable in demud/inc/template-function
     */
    do_action('woocommerce_before_shop_loop_item'); ?>

    <?php
    //    img
    /**
     * Hook: woocommerce_before_shop_loop_item_title.
     *
     * @hooked woocommerce_show_product_loop_sale_flash - 10 - disable in demud/inc/template-function
     * @hooked woocommerce_template_loop_product_thumbnail - 10 - disable in demud/inc/template-function
     */
    do_action('demud_open_link');
    the_post_thumbnail('woocommerce_thumbnail', array('class' => 'product-card__img'));
    wc_get_template( 'loop/sale-flash.php' );
    do_action('woocommerce_before_shop_loop_item_title');
    do_action('demud_close_link');
    ?>
    <div class="product-card__body">

        <?php
        //    title
        /**
         * Hook: woocommerce_shop_loop_item_title.
         *
         * @hooked woocommerce_template_loop_product_title - 10
         */
        do_action('demud_open_link');
        do_action('woocommerce_shop_loop_item_title');
        do_action('demud_close_link');
        ?>
        <p class="product-card__description"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>

    </div> <!--product-card__body-->
    <?php
    //        price
    /**
     * Hook: woocommerce_after_shop_loop_item_title.
     *
     * @hooked woocommerce_template_loop_rating - 5 - disable in demud/inc/template-function
     * @hooked woocommerce_template_loop_price - 10
     */
    do_action('woocommerce_after_shop_loop_item_title'); ?>

    <div class="product-card__footer">

        <?php
//        add-to-card
        /**
         * Hook: woocommerce_after_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_close - 5 - disable in demud/inc/template-function
         * @hooked woocommerce_template_loop_add_to_cart - 10
         */
        do_action('woocommerce_after_shop_loop_item');

        ?>


    </div> <!--product-card__footer-->

</div> <!--product-card-->
