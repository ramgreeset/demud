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
                <button class="button button--link">
                    Все товары
                    <svg class="section__icon icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#arrow-right"></use>
                    </svg>
                </button>
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
                <h2 class="section__title">Новости</h2>
                <button class="button button--link">
                    Все новости
                    <svg class="section__icon icon">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#arrow-right"></use>
                    </svg>
                </button>
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
<!--    Контакты-->
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
            <div>
                <img class="main-contacts__img" src="<?php echo get_template_directory_uri(); ?>/assets/contacts.jpg"
                     alt="">
            </div>
        </div>
    </section>
    </main>
<?php
get_footer();
