<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop'); ?>

    <main class="main">
        <section class="page-header">
            <div class="container page-header__container">
                <?php do_action('demud_before_shop_loop_header'); ?>
            </div>
        </section>
        <section class="section product-detail">
            <div class="container">

                <?php
                //@hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                do_action('woocommerce_before_main_content');
                ?>

                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>


                    <?php
                    //Функция пробрасывает content-single-product
                    wc_get_template_part('content', 'single-product');
                    ?>

                <?php endwhile; // end of the loop. ?>

                <?php
                /**
                 * woocommerce_after_main_content hook.
                 *
                 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                 */
                do_action('woocommerce_after_main_content');
                ?>
            </div>
        </section>
        <section class="section main-cards js-main-cards">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Популярное</h2>

                    <div class="navigation">
                        <button class="navigation__button button button--icon js-main-cards-prev">
                            <svg class="icon">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-left"></use>
                            </svg>
                        </button>
                        <button class="navigation__button button button--icon js-main-cards-next">
                            <svg class="icon">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-right"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="swiper js-main-cards-slider">
                    <div class="swiper-wrapper">
                        <?php echo do_shortcode('[content-hit-products]') ?>
                    </div>
                </div>

                <div class="main-cards__footer">
                    <a href="" class="main-cards__button button button--outline">
                        Все товары
                        <svg class="icon">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
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
                                Наш декор изготовлен из высококачественного гипса. Он экологичен, безопасен и
                                долговечен.
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
                                Протирать мягкой сухой или чуть влажной тканью. Не рекомендуется мыть под струей воды,
                                чтобы
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
                                Да, мы можем покрасить гипсовые изделия в разные цвета. Свяжитесь с нами, чтобы обсудить
                                детали.
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
                                Мы тщательно упаковываем каждый заказ в плотную упаковку с защитой, чтобы он доехал в
                                целости.
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
                                Да, мы можем изготовить декор по вашему эскизу или пожеланиям. Сроки и стоимость
                                обсуждаются
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
                                Конечно! Мы сотрудничаем с дизайнерами, магазинами и студиями. Свяжитесь с нами для
                                расчета
                                стоимости.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
