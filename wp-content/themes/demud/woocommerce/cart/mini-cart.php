<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
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

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_mini_cart' ); ?>
<div class="widget_shopping_cart_content">
    <a href="<?php echo wc_get_cart_url(); ?>" class="header__button button button--icon">
        <svg class="icon">
            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/sprite.svg#handbag"></use>
        </svg>

        <span class="header__button-count chip"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
    </a>
</div>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>
