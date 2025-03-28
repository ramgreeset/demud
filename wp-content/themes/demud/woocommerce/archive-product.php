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
                <?php aws_get_search_form(true); ?>
                <div class="select">

                    <?php
                    //                    @hooked woocommerce_output_all_notices - 10 disable in demud/inc/template-functions
                    //                    @hooked woocommerce_result_count - 20 - disable in demud/inc/template-functions
                    //                    @hooked woocommerce_catalog_ordering - 30
                    do_action('woocommerce_before_shop_loop');
                    ?>
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
                    <span class="accordion__title title-h4">Из чего сделаны ваши изделия?</span>
                    <svg class="accordion__icon icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-down"></use>
                    </svg>
                </div>
                <div class="accordion__body js-accordion-body">
                    <div class="accordion__content content">
                        Наш декор изготовлен из высококачественного гипса. Он экологичен, безопасен и долговечен.
                    </div>
                </div>
            </div>
            <div class="accordion__item js-accordion-item">
                <div class="accordion__header js-accordion-header">
                    <span class="accordion__title title-h4">Как ухаживать за гипсовыми изделиями?</span>
                    <svg class="accordion__icon icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-down"></use>
                    </svg>
                </div>
                <div class="accordion__body js-accordion-body">
                    <div class="accordion__content content">
                        Протирать мягкой сухой или чуть влажной тканью. Не рекомендуется мыть под струей воды, чтобы
                        избежать
                        повреждений.
                    </div>
                </div>
            </div>
            <div class="accordion__item js-accordion-item">
                <div class="accordion__header js-accordion-header">
                    <span class="accordion__title title-h4">Можно ли заказать изделие в другом цвете?</span>
                    <svg class="accordion__icon icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-down"></use>
                    </svg>
                </div>
                <div class="accordion__body js-accordion-body">
                    <div class="accordion__content content">
                        Да, мы можем покрасить гипсовые изделия в разные цвета. Свяжитесь с нами, чтобы обсудить детали.
                    </div>
                </div>
            </div>
            <div class="accordion__item js-accordion-item">
                <div class="accordion__header js-accordion-header">
                    <span class="accordion__title title-h4">Доставляете ли вы в другие регионы?</span>
                    <svg class="accordion__icon icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-down"></use>
                    </svg>
                </div>
                <div class="accordion__body js-accordion-body">
                    <div class="accordion__content content">
                        Да, мы отправляем заказы по всей России. Стоимость и сроки зависят от вашего города.
                    </div>
                </div>
            </div>
            <div class="accordion__item js-accordion-item">
                <div class="accordion__header js-accordion-header">
                    <span class="accordion__title title-h4">Как упаковываются гипсовые изделия при доставке?</span>
                    <svg class="accordion__icon icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-down"></use>
                    </svg>
                </div>
                <div class="accordion__body js-accordion-body">
                    <div class="accordion__content content">
                        Мы тщательно упаковываем каждый заказ в плотную упаковку с защитой, чтобы он доехал в целости.
                    </div>
                </div>
            </div>
            <div class="accordion__item js-accordion-item">
                <div class="accordion__header js-accordion-header">
                    <span class="accordion__title title-h4">Можно ли заказать индивидуальный дизайн?</span>
                    <svg class="accordion__icon icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-down"></use>
                    </svg>
                </div>
                <div class="accordion__body js-accordion-body">
                    <div class="accordion__content content">
                        Да, мы можем изготовить декор по вашему эскизу или пожеланиям. Сроки и стоимость обсуждаются
                        индивидуально.
                    </div>
                </div>
            </div>
            <div class="accordion__item js-accordion-item">
                <div class="accordion__header js-accordion-header">
                    <span class="accordion__title title-h4">Как оплатить заказ?</span>
                    <svg class="accordion__icon icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-down"></use>
                    </svg>
                </div>
                <div class="accordion__body js-accordion-body">
                    <div class="accordion__content content">
                        Оплата возможна картой, электронными кошельками или наложенным платежом при получении.
                    </div>
                </div>
            </div>
            <div class="accordion__item js-accordion-item">
                <div class="accordion__header js-accordion-header">
                    <span class="accordion__title title-h4">Можно ли сделать оптовый заказ?</span>
                    <svg class="accordion__icon icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-down"></use>
                    </svg>
                </div>
                <div class="accordion__body js-accordion-body">
                    <div class="accordion__content content">
                        Конечно! Мы сотрудничаем с дизайнерами, магазинами и студиями. Свяжитесь с нами для расчета
                        стоимости.
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

