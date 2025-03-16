<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined('ABSPATH') || exit;

get_header('shop');
?>

<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');
?>

<section class="page-header">
    <div class="container page-header__container">

        <!--        @hooked woocommerce_breadcrumb - 20-->
        <?php do_action('demud_before_shop_loop_header'); ?>

        <!--        @hooked woocommerce_product_taxonomy_archive_header - 10-->
        <?php do_action('woocommerce_shop_loop_header'); ?>
</section>

<section class="section catalog">
    <div class="container">
        <?php
        if (woocommerce_product_loop()) {
            ?>
            <div class="section__header catalog__controls">
                <?php aws_get_search_form( true ); ?>
                <div class="select">
                    <!--                            @hooked woocommerce_output_all_notices - 10 disable in demud/inc/template-functions-->
                    <!--                            @hooked woocommerce_result_count - 20 - disable in demud/inc/template-functions-->
                    <!--                            @hooked woocommerce_catalog_ordering - 30-->
                    <?php do_action('woocommerce_before_shop_loop'); ?>
                </div>
            </div>
            <?php woocommerce_product_loop_start(); ?>
            <?php

            if (wc_get_loop_prop('total')) {
                while (have_posts()) {
                    the_post();

                    /**
                     * Hook: woocommerce_shop_loop.
                     */
                    do_action('woocommerce_shop_loop');

                    wc_get_template_part('content', 'product');
                }
            }
            ?>

            <?php woocommerce_product_loop_end(); ?>
            <!--                    @hooked woocommerce_pagination - 10-->
            <?php do_action('woocommerce_after_shop_loop');
        } else {
            /**
             * Hook: woocommerce_no_products_found.
             *
             * @hooked wc_no_products_found - 10
             */
            do_action('woocommerce_no_products_found');
        }
        ?>
    </div>

</section>

<section class="section faq">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Вопросы и ответы</h2>
        </div>
        <div class="accordion js-accordion">
            <div class="accordion__item js-accordion-item">
                <div class="accordion__header js-accordion-header">
                    <span class="accordion__title title-h4">Как ухаживать за изделием?</span>
                    <svg class="accordion__icon icon">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-down"></use>
                    </svg>
                </div>
                <div class="accordion__body js-accordion-body">
                    <div class="accordion__content content">
                        <ol>
                            <li>
                                Изделия можно протирать тряпочкой. При необходимости помыть под струей холодной
                                воды.
                                Мытье в горячей воде и контакт с щелочами не рекомендуется , возможно повреждение
                                поверхностного
                                слоя.
                            </li>
                            <li>
                                Предметы не предназначены для употребления пищи людьми и животными.
                            </li>
                            <li>
                                Избегать длительный контакт с водой.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion__item js-accordion-item">
                <div class="accordion__header js-accordion-header">
                    <span class="accordion__title title-h4">Как оформить заказ?</span>
                    <svg class="accordion__icon icon">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-down"></use>
                    </svg>
                </div>
                <div class="accordion__body js-accordion-body">
                    <div class="accordion__content content">
                        <ol>
                            <li>
                                Изделия можно протирать тряпочкой. При необходимости помыть под струей холодной
                                воды.
                                Мытье в горячей воде и контакт с щелочами не рекомендуется , возможно повреждение
                                поверхностного
                                слоя.
                            </li>
                            <li>
                                Предметы не предназначены для употребления пищи людьми и животными.
                            </li>
                            <li>
                                Избегать длительный контакт с водой.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion__item js-accordion-item">
                <div class="accordion__header js-accordion-header">
                    <span class="accordion__title title-h4">Как оплатить заказ?</span>
                    <svg class="accordion__icon icon">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-down"></use>
                    </svg>
                </div>
                <div class="accordion__body js-accordion-body">
                    <div class="accordion__content content">
                        <ol>
                            <li>
                                Изделия можно протирать тряпочкой. При необходимости помыть под струей холодной
                                воды.
                                Мытье в горячей воде и контакт с щелочами не рекомендуется , возможно повреждение
                                поверхностного
                                слоя.
                            </li>
                            <li>
                                Предметы не предназначены для употребления пищи людьми и животными.
                            </li>
                            <li>
                                Избегать длительный контакт с водой.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion__item js-accordion-item">
                <div class="accordion__header js-accordion-header">
                    <span class="accordion__title title-h4">Как оформить доставку?</span>
                    <svg class="accordion__icon icon">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-down"></use>
                    </svg>
                </div>
                <div class="accordion__body js-accordion-body">
                    <div class="accordion__content content">
                        <ol>
                            <li>
                                Изделия можно протирать тряпочкой. При необходимости помыть под струей холодной
                                воды.
                                Мытье в горячей воде и контакт с щелочами не рекомендуется , возможно повреждение
                                поверхностного
                                слоя.
                            </li>
                            <li>
                                Предметы не предназначены для употребления пищи людьми и животными.
                            </li>
                            <li>
                                Избегать длительный контакт с водой.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

?>

<?php get_footer('shop'); ?>

