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
<!--О нас-->
    <section class="main-about">
        <div class="container main-about__container">
            <div class="main-about__item">
                <h2>О нас</h2>
                <div class="main-about__text">
                    <p>
                        Наша команда специализируется на гипсовом декоре. От 3D моделирования до отливки мы создаем
                        стильные
                        изделия, которые подчеркивают индивидуальность вашего бренда.
                    </p>
                    <p>
                        Каждый этап мы проходим с вниманием к деталям: проектируем, изготавливаем формы и создаем декор,
                        сочетающий
                        элегантность и функциональность для интерьеров и витрин.
                    </p>
                    <p>
                        Наша миссия — предлагать эксклюзивный декор премиум-качества, отвечающий самым высоким
                        стандартам.
                    </p>

                </div>
            </div>
            <div class="main-about__item">
                <img class="main-about__img" src="<?php echo get_template_directory_uri();?>/assets/about.png" alt="">
            </div>
        </div>
    </section>
<!--    Товары-->
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
<!--    Новости-->
    <section class="section">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">Блог</h2>
                <a href="<?php echo home_url('/news/')?>" class="button button--link">
                    Все статьи
                    <svg class="section__icon icon">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#arrow-right"></use>
                    </svg>
                </a>
            </div>
            <div class="section__grid">
                <div class="news-card">
                    <div class="news-card__header">
                        <img class="news-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/new.png"
                             alt="">
                    </div>
                    <div class="news-card__body">
                        <h3 class="news-card__title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, deleniti!
                        </h3>
                        <p class="news-card__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolor illo inventore
                            laborum libero
                            perferendis qui quidem quod saepe temporibus!
                        </p>
                    </div>
                    <div class="news-card__footer">
                        <button class="news-card__button button">
                            Подробнее
                        </button>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card__header">
                        <img class="news-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/new.png"
                             alt="">
                    </div>
                    <div class="news-card__body">
                        <h3 class="news-card__title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, deleniti!
                        </h3>
                        <p class="news-card__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolor illo inventore
                            laborum libero
                            perferendis qui quidem quod saepe temporibus!
                        </p>
                    </div>
                    <div class="news-card__footer">
                        <button class="news-card__button button">
                            Подробнее
                        </button>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card__header">
                        <img class="news-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/new.png"
                             alt="">
                    </div>
                    <div class="news-card__body">
                        <h3 class="news-card__title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, deleniti!
                        </h3>
                        <p class="news-card__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolor illo inventore
                            laborum libero
                            perferendis qui quidem quod saepe temporibus!
                        </p>
                    </div>
                    <div class="news-card__footer">
                        <button class="news-card__button button">
                            Подробнее
                        </button>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card__header">
                        <img class="news-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/new.png"
                             alt="">
                    </div>
                    <div class="news-card__body">
                        <h3 class="news-card__title">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, deleniti!
                        </h3>
                        <p class="news-card__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolor illo inventore
                            laborum libero
                            perferendis qui quidem quod saepe temporibus!
                        </p>
                    </div>
                    <div class="news-card__footer">
                        <button class="news-card__button button">
                            Подробнее
                        </button>
                    </div>
                </div>
            </div>
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
<!--    Контакты-->
    </main>
<?php
get_footer();
