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
        <section class="hero">
            <div class="container hero__container">
                <div class="hero__item hero__item--light">
                    <img class="hero__item-img" src="<?php echo get_template_directory_uri()?>/assets/hero-CDJxVEej.png" alt="">
                </div>
                <div class="hero__item hero__item--dark">
                    <h1 class="hero__item-title">Декор из гипса, <br> который вдохновляет</h1>
                    <p class="hero__item-description">Создаем стильные изделия, идеально дополняющие ваш интерьер.</p>
                </div>
            </div>
        </section>

        <section class="main-about">
            <div class="container main-about__container">
                <div class="main-about__item">
                    <h2>О нас</h2>
                    <div class="main-about__text">
                        <p>
                            Наша команда специализируется на гипсовом декоре. От 3D моделирования до отливки мы создаем стильные
                            изделия, которые подчеркивают индивидуальность вашего бренда.
                        </p>
                        <p>
                            Каждый этап мы проходим с вниманием к деталям: проектируем, изготавливаем формы и создаем декор,
                            сочетающий
                            элегантность и функциональность для интерьеров и витрин.
                        </p>
                        <p>
                            Наша миссия — предлагать эксклюзивный декор премиум-качества, отвечающий самым высоким стандартам.
                        </p>

                    </div>
                </div>
                <div class="main-about__item">
                    <img class="main-about__img" src="<?php echo get_template_directory_uri()?>/assets/about-BB__pugM.png" alt="">
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Популярное</h2>
                    <button class="button button--link">
                        Все товары
                        <svg class="section__icon icon">
                            <use href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#arrow-right"></use>
                        </svg>
                    </button>
                </div>
                <div class="section__grid">
                    <div class="product-card">
                        <a class="product-card__header" href="#">
                            <img class="product-card__img" src="<?php echo get_template_directory_uri()?>/assets/product-BAKe1iKQ.png" alt="">
                            <span class="product-card__badge">New</span>
                        </a>
                        <div class="product-card__body">
                            <a href="#">
                                <h3 class="product-card__title">Serenity</h3>
                            </a>
                            <p class="product-card__description">Подставка для благовоний</p>
                        </div>
                        <div class="product-card__footer">
                            <div class="price">
                                <span class="price__old">2000₽</span>
                                <span class="price__new">1500₽</span>
                            </div>    <button class="product-card__button">
                                <svg class="icon">
                                    <use href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#handbag"></use>
                                </svg>
                            </button>
                        </div>
                    </div>      <div class="product-card">
                        <a class="product-card__header" href="#">
                            <img class="product-card__img" src="<?php echo get_template_directory_uri()?>/assets/product-BAKe1iKQ.png" alt="">
                            <span class="product-card__badge">New</span>
                        </a>
                        <div class="product-card__body">
                            <a href="#">
                                <h3 class="product-card__title">Serenity</h3>
                            </a>
                            <p class="product-card__description">Подставка для благовоний</p>
                        </div>
                        <div class="product-card__footer">
                            <div class="price">
                                <span class="price__old">2000₽</span>
                                <span class="price__new">1500₽</span>
                            </div>    <button class="product-card__button">
                                <svg class="icon">
                                    <use href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#handbag"></use>
                                </svg>
                            </button>
                        </div>
                    </div>      <div class="product-card">
                        <a class="product-card__header" href="#">
                            <img class="product-card__img" src="<?php echo get_template_directory_uri()?>/assets/product-BAKe1iKQ.png" alt="">
                            <span class="product-card__badge">New</span>
                        </a>
                        <div class="product-card__body">
                            <a href="#">
                                <h3 class="product-card__title">Serenity</h3>
                            </a>
                            <p class="product-card__description">Подставка для благовоний</p>
                        </div>
                        <div class="product-card__footer">
                            <div class="price">
                                <span class="price__old">2000₽</span>
                                <span class="price__new">1500₽</span>
                            </div>    <button class="product-card__button">
                                <svg class="icon">
                                    <use href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#handbag"></use>
                                </svg>
                            </button>
                        </div>
                    </div>      <div class="product-card">
                        <a class="product-card__header" href="#">
                            <img class="product-card__img" src="<?php echo get_template_directory_uri()?>/assets/product-BAKe1iKQ.png" alt="">
                            <span class="product-card__badge">New</span>
                        </a>
                        <div class="product-card__body">
                            <a href="#">
                                <h3 class="product-card__title">Serenity</h3>
                            </a>
                            <p class="product-card__description">Подставка для благовоний</p>
                        </div>
                        <div class="product-card__footer">
                            <div class="price">
                                <span class="price__old">2000₽</span>
                                <span class="price__new">1500₽</span>
                            </div>    <button class="product-card__button">
                                <svg class="icon">
                                    <use href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#handbag"></use>
                                </svg>
                            </button>
                        </div>
                    </div>    </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Новости</h2>
                    <button class="button button--link">
                        Все новости
                        <svg class="section__icon icon">
                            <use href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#arrow-right"></use>
                        </svg>
                    </button>
                </div>
                <div class="section__grid">
                    <div class="news-card">
                        <div class="news-card__header">
                            <img class="news-card__img" src="<?php echo get_template_directory_uri()?>/assets/new-bazra6Bm.png" alt="">
                        </div>
                        <div class="news-card__body">
                            <h3 class="news-card__title">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, deleniti!
                            </h3>
                            <p class="news-card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolor illo inventore laborum libero
                                perferendis qui quidem quod saepe temporibus!
                            </p>
                        </div>
                        <div class="news-card__footer">
                            <button class="news-card__button button">
                                Подробнее
                            </button>
                        </div>
                    </div>      <div class="news-card">
                        <div class="news-card__header">
                            <img class="news-card__img" src="<?php echo get_template_directory_uri()?>/assets/new-bazra6Bm.png" alt="">
                        </div>
                        <div class="news-card__body">
                            <h3 class="news-card__title">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, deleniti!
                            </h3>
                            <p class="news-card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolor illo inventore laborum libero
                                perferendis qui quidem quod saepe temporibus!
                            </p>
                        </div>
                        <div class="news-card__footer">
                            <button class="news-card__button button">
                                Подробнее
                            </button>
                        </div>
                    </div>      <div class="news-card">
                        <div class="news-card__header">
                            <img class="news-card__img" src="<?php echo get_template_directory_uri()?>/assets/new-bazra6Bm.png" alt="">
                        </div>
                        <div class="news-card__body">
                            <h3 class="news-card__title">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, deleniti!
                            </h3>
                            <p class="news-card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolor illo inventore laborum libero
                                perferendis qui quidem quod saepe temporibus!
                            </p>
                        </div>
                        <div class="news-card__footer">
                            <button class="news-card__button button">
                                Подробнее
                            </button>
                        </div>
                    </div>      <div class="news-card">
                        <div class="news-card__header">
                            <img class="news-card__img" src="<?php echo get_template_directory_uri()?>/assets/new-bazra6Bm.png" alt="">
                        </div>
                        <div class="news-card__body">
                            <h3 class="news-card__title">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, deleniti!
                            </h3>
                            <p class="news-card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolor illo inventore laborum libero
                                perferendis qui quidem quod saepe temporibus!
                            </p>
                        </div>
                        <div class="news-card__footer">
                            <button class="news-card__button button">
                                Подробнее
                            </button>
                        </div>
                    </div>    </div>
            </div>
        </section>
        <section class="main-gallery">
            <div class="container">
                <h2>Галерея</h2>
                <div class="main-gallery__grid">
                    <div class="main-gallery__item main-gallery__item--lg">
                        <img class="main-gallery__item-img" src="<?php echo get_template_directory_uri()?>/assets/new-bazra6Bm.png" alt="">
                    </div>
                    <div class="main-gallery__item">
                        <img class="main-gallery__item-img" src="<?php echo get_template_directory_uri()?>/assets/hero-CDJxVEej.png" alt="">
                    </div>
                    <div class="main-gallery__item">
                        <img class="main-gallery__item-img" src="<?php echo get_template_directory_uri()?>/assets/product-BAKe1iKQ.png" alt="">
                    </div>
                    <div class="main-gallery__item">
                        <img class="main-gallery__item-img" src="<?php echo get_template_directory_uri()?>/assets/about-BB__pugM.png" alt="">
                    </div>
                    <div class="main-gallery__item">
                        <img class="main-gallery__item-img" src="<?php echo get_template_directory_uri()?>/assets/gallery-DiWFQp0e.png" alt="">
                    </div>
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
                            <h3 class="accordion__title">Как ухаживать за изделием?</h3>
                            <svg class="accordion__icon icon">
                                <use href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#caret-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__body js-accordion-body">
                            <div class="accordion__content content">
                                <ol>
                                    <li>
                                        Изделия можно протирать тряпочкой. При необходимости помыть под струей холодной воды.
                                        Мытье в горячей воде и контакт с щелочами не рекомендуется , возможно повреждение поверхностного
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
                            <h3 class="accordion__title">Как оформить заказ?</h3>
                            <svg class="accordion__icon icon">
                                <use href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#caret-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__body js-accordion-body">
                            <div class="accordion__content content">
                                <ol>
                                    <li>
                                        Изделия можно протирать тряпочкой. При необходимости помыть под струей холодной воды.
                                        Мытье в горячей воде и контакт с щелочами не рекомендуется , возможно повреждение поверхностного
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
                            <h3 class="accordion__title">Как оплатить заказ?</h3>
                            <svg class="accordion__icon icon">
                                <use href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#caret-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__body js-accordion-body">
                            <div class="accordion__content content">
                                <ol>
                                    <li>
                                        Изделия можно протирать тряпочкой. При необходимости помыть под струей холодной воды.
                                        Мытье в горячей воде и контакт с щелочами не рекомендуется , возможно повреждение поверхностного
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
                            <h3 class="accordion__title">Как оформить доставку?</h3>
                            <svg class="accordion__icon icon">
                                <use href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#caret-down"></use>
                            </svg>
                        </div>
                        <div class="accordion__body js-accordion-body">
                            <div class="accordion__content content">
                                <ol>
                                    <li>
                                        Изделия можно протирать тряпочкой. При необходимости помыть под струей холодной воды.
                                        Мытье в горячей воде и контакт с щелочами не рекомендуется , возможно повреждение поверхностного
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
                                <use href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#map-pin"></use>
                            </svg>
                            <div class="main-contacts__item-content">
                                <span class="main-contacts__item-title">Адрес</span>
                                г. Москва, м. Котельники
                            </div>
                        </li>
                        <li class="main-contacts__item">
                            <svg class="main-contacts__item-icon icon">
                                <use href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#phone"></use>
                            </svg>
                            <div class="main-contacts__item-content">
                                <span class="main-contacts__item-title">Телефон</span>
                                <a href="tel:+7(918)335-03-07">+7(918)335-03-07</a>
                            </div>
                        </li>
                        <li class="main-contacts__item">
                            <svg class="main-contacts__item-icon icon">
                                <use href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#envelope"></use>
                            </svg>
                            <div class="main-contacts__item-content">
                                <span class="main-contacts__item-title">Email</span>
                                <a href="mailto:demud.box@gmail.com">demud.box@gmail.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <img class="main-contacts__img" src="<?php echo get_template_directory_uri()?>/assets/contacts-DsLTZh78.jpg" alt="">
                </div>
            </div>
        </section>  </main>

<?php
get_footer();
