<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demud
 */

get_header();
?>

    <main class="main">
<!--    Топ-->
    <section class="hero">
        <div class="container hero__container">
            <div class="hero__item hero__item--light">
                <img class="hero__img" src="<?php echo get_template_directory_uri();?>/assets/hero.png" alt="">
            </div>
            <div class="hero__item hero__item--dark">
                <div class="hero__content">
                    <h1 class="hero__title">Декор из гипса, <br> который вдохновляет</h1>
                    <p class="hero__description">Создаем стильные изделия, идеально дополняющие ваш интерьер.</p>
                </div>
            </div>
        </div>
    </section>

        <!--    Категории-->
        <section class="section">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Категории</h2>
                    <a href="" class="button button--link">
                        Все товары
                        <svg class="section__icon icon">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
                <?php echo do_shortcode('[product_categories number="8" parent="0"]')?>

            </div>
        </section>

    <section class="section">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">Популярное</h2>
                <a href="<?php echo wc_get_page_permalink( 'shop' )?>" class="button button--link">
                    Все товары
                    <svg class="section__icon icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#arrow-right"></use>
                    </svg>
                </a>
            </div>
            <div>
                <?php echo do_shortcode('[featured_products limit="4"]')?>
            </div>
        </div>
    </section>
        <!--    Популярные-->
        <section class="section">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Популярное</h2>
                    <a href="<?php echo wc_get_page_permalink( 'shop' )?>" class="button button--link">
                        Все товары
                        <svg class="section__icon icon">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
                <div>
                    <?php echo do_shortcode('[featured_products limit="4"]')?>
                </div>
            </div>
        </section>

<!--    Популярные-->
        <section class="section">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Популярное</h2>
                    <a href="<?php echo wc_get_page_permalink( 'shop' )?>" class="button button--link">
                        Все товары
                        <svg class="section__icon icon">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
                <div>
                    <?php echo do_shortcode('[featured_products limit="4"]')?>
                </div>
            </div>
        </section>

<!--    Блог-->
        <section class="section">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Блог</h2>
                    <a href="" class="button button--link">
                        Все статьи
                        <svg class="section__icon icon">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
                <div class="grid grid--cols-4">
                    <div class="news-card">
                        <a class="news-card__header" href="">
                            <img class="news-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/new.png" alt="">
                            <span class="news-card__badge badge">New</span>
                        </a>
                        <div class="news-card__body">
                            <div class="date">
                                <svg class="icon">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#calendar"></use>
                                </svg>
                                <time datetime="2025-03-13">13 марта 2025</time>
                            </div>    <a href="">
                                <h3 class="news-card__title">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at, natus omnis rerum sunt vero.
                                </h3>
                            </a>
                            <p class="news-card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid atque, distinctio doloremque harum
                                impedit laboriosam laudantium magni nemo omnis perspiciatis praesentium quod quos ratione rerum saepe tempore
                                tenetur voluptatum!
                            </p>
                        </div>
                    </div>      <div class="news-card">
                        <a class="news-card__header" href="">
                            <img class="news-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/new.png" alt="">
                            <span class="news-card__badge badge">New</span>
                        </a>
                        <div class="news-card__body">
                            <div class="date">
                                <svg class="icon">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#calendar"></use>
                                </svg>
                                <time datetime="2025-03-13">13 марта 2025</time>
                            </div>    <a href="">
                                <h3 class="news-card__title">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at, natus omnis rerum sunt vero.
                                </h3>
                            </a>
                            <p class="news-card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid atque, distinctio doloremque harum
                                impedit laboriosam laudantium magni nemo omnis perspiciatis praesentium quod quos ratione rerum saepe tempore
                                tenetur voluptatum!
                            </p>
                        </div>
                    </div>      <div class="news-card">
                        <a class="news-card__header" href="">
                            <img class="news-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/new.png" alt="">
                            <span class="news-card__badge badge">New</span>
                        </a>
                        <div class="news-card__body">
                            <div class="date">
                                <svg class="icon">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#calendar"></use>
                                </svg>
                                <time datetime="2025-03-13">13 марта 2025</time>
                            </div>    <a href="">
                                <h3 class="news-card__title">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at, natus omnis rerum sunt vero.
                                </h3>
                            </a>
                            <p class="news-card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid atque, distinctio doloremque harum
                                impedit laboriosam laudantium magni nemo omnis perspiciatis praesentium quod quos ratione rerum saepe tempore
                                tenetur voluptatum!
                            </p>
                        </div>
                    </div>      <div class="news-card">
                        <a class="news-card__header" href="">
                            <img class="news-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/new.png" alt="">
                            <span class="news-card__badge badge">New</span>
                        </a>
                        <div class="news-card__body">
                            <div class="date">
                                <svg class="icon">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#calendar"></use>
                                </svg>
                                <time datetime="2025-03-13">13 марта 2025</time>
                            </div>    <a href="">
                                <h3 class="news-card__title">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at, natus omnis rerum sunt vero.
                                </h3>
                            </a>
                            <p class="news-card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid atque, distinctio doloremque harum
                                impedit laboriosam laudantium magni nemo omnis perspiciatis praesentium quod quos ratione rerum saepe tempore
                                tenetur voluptatum!
                            </p>
                        </div>
                    </div>    </div>
            </div>
        </section>
<!--    Вопросы-->
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
                                Протирать мягкой сухой или чуть влажной тканью. Не рекомендуется мыть под струей воды, чтобы избежать
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
                                Да, мы можем изготовить декор по вашему эскизу или пожеланиям. Сроки и стоимость обсуждаются индивидуально.
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
                                Конечно! Мы сотрудничаем с дизайнерами, магазинами и студиями. Свяжитесь с нами для расчета стоимости.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();
