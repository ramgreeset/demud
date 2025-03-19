<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

?>


<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>


    <?php do_action('woocommerce_before_single_product_summary'); ?>

    <div class="summary entry-summary">

        <div class="product-detail__grid">
            <div class="product-detail__gallery">
                <div class="swiper product-detail__slider js-product-slider">
                    <div class="swiper-wrapper">
                        <?php wc_get_template('single-product/product-thumbnails.php') ?>

                    </div>
                </div>

                <div class="swiper product-detail__thumbs js-product-thumbs">
                    <div class="swiper-wrapper">
                        <?php wc_get_template('single-product/product-thumbnails.php') ?>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-detail__detail">
                    <div>
                        <?php do_action('demud_show_product_title'); ?>
                        <?php wc_get_template('single-product/tabs/description.php') ?>

                    </div>

                    <?php
                    global $product;

                    $attributes = $product->get_attributes();

                    if (!empty($attributes)) {
                        echo '<ul class="params">';
                        foreach ($attributes as $attribute) {
                            echo '<li class="params__item"><span class="params__prop">' . wc_attribute_label($attribute->get_name()) . '</span><span class="params__value">' . implode(', ', $attribute->get_options()) . '</span></li>';
                        }
                        echo '</ul>';
                    }
                    do_action('demud_show_single_meta');

                    ?>

                    <div class="product-detail__info">

                        <div class="rating">
                            <?php do_action('demud_show_single_rating'); ?>

                            <ul class="rating__list">
                                <li class="rating__item">
                                    <svg class="rating__icon icon">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#star-fill"></use>
                                    </svg>
                                </li>
                                <li class="rating__item">
                                    <svg class="rating__icon icon">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#star-fill"></use>
                                    </svg>
                                </li>
                                <li class="rating__item">
                                    <svg class="rating__icon icon">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#star-fill"></use>
                                    </svg>
                                </li>
                                <li class="rating__item">
                                    <svg class="rating__icon icon">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#star-half-fill"></use>
                                    </svg>
                                </li>
                                <li class="rating__item">
                                    <svg class="rating__icon icon">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#star"></use>
                                    </svg>
                                </li>
                            </ul>
                        </div>
                        <?php do_action('demud_show_single_price'); ?>

                    </div>
                    <?php do_action('demud_show_single_add_to_cart'); ?>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
/**
 * Hook: woocommerce_after_single_product_summary.
 *
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
do_action('woocommerce_after_single_product_summary');
?>
<?php do_action('woocommerce_after_single_product'); ?>
