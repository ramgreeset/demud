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

    <section class="page-header">
        <div class="container page-header__container">

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

    <section class="section">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">Популярное</h2>
                <a href="<?php echo wc_get_page_permalink('shop') ?>" class="button button--link">
                    Все товары
                    <svg class="section__icon icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#arrow-right"></use>
                    </svg>
                </a>
            </div>
            <div>
                <?php echo do_shortcode('[featured_products limit="4"]') ?>
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
    <section class="main-contacts">
        <div class="container main-contacts__container">
            <div>
                <h2>Контакты</h2>
                <ul class="main-contacts__list">
                    <li class="main-contacts__item">
                        <svg class="main-contacts__item-icon icon">
                            <use href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#map-pin"></use>
                        </svg>
                        <div class="main-contacts__item-content">
                            <span class="title-h4">Адрес</span>
                            г. Москва, м. Котельники
                        </div>
                    </li>
                    <li class="main-contacts__item">
                        <svg class="main-contacts__item-icon icon">
                            <use href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#phone"></use>
                        </svg>
                        <div class="main-contacts__item-content">
                            <span class="title-h4">Телефон</span>
                            <a href="tel:+7(918)335-03-07">+7(918)335-03-07</a>
                        </div>
                    </li>
                    <li class="main-contacts__item">
                        <svg class="main-contacts__item-icon icon">
                            <use href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#envelope"></use>
                        </svg>
                        <div class="main-contacts__item-content">
                            <span class="title-h4">Email</span>
                            <a href="mailto:demud.box@gmail.com">demud.box@gmail.com</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?php
get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
