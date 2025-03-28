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
        <!--Топ-->
        <section class="hero">
            <div class="container hero__container">
                <div class="hero__item hero__item--light">
                    <img class="hero__img" src="<?php echo get_template_directory_uri(); ?>/assets/hero.png" alt="">
                </div>
                <div class="hero__item hero__item--dark">
                    <div class="hero__content">
                        <h1 class="hero__title">Декор из гипса, <br> который вдохновляет</h1>
                        <p class="hero__description">Создаем стильные изделия, идеально дополняющие ваш интерьер.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Категории-->
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
                <?php echo do_shortcode('[product_categories number="8" parent="0"]') ?>

            </div>
        </section>
        <!--Баннер-->
        <section class="main-banner section">
            <div class="container">
                <div class="swiper js-main-banner">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="main-banner__item">
                                <div class="main-banner__item-content">
                                    <h2 class="main-banner__item-title">Летняя распродажа!</h2>
                                    <p class="main-banner__item-text">Скидки до 30% на весь ассортимент. Используйте
                                        промокод SUMMER.</p>
                                    <a href="#" class="button button--outline">Узнать подробности</a>
                                </div>
                                <div class="main-banner__item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/005.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-banner__item">
                                <div class="main-banner__item-content">
                                    <h2 class="main-banner__item-title">Летняя распродажа!</h2>
                                    <p class="main-banner__item-text">Скидки до 30% на весь ассортимент. Используйте
                                        промокод SUMMER.</p>
                                    <a href="#" class="button button--outline">Узнать подробности</a>
                                </div>
                                <div class="main-banner__item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/002.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-banner__item">
                                <div class="main-banner__item-content">
                                    <h2 class="main-banner__item-title">Летняя распродажа!</h2>
                                    <p class="main-banner__item-text">Скидки до 30% на весь ассортимент. Используйте
                                        промокод SUMMER.</p>
                                    <a href="#" class="button button--outline">Узнать подробности</a>
                                </div>
                                <div class="main-banner__item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/007.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!--Популярные-->
        <section class="section js-main-products">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Популярное</h2>

                    <div class="navigation">
                        <button class="navigation__button button button--icon js-main-products-prev">
                            <svg class="icon">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-left"></use>
                            </svg>
                        </button>
                        <button class="navigation__button button button--icon js-main-products-next">
                            <svg class="icon">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#caret-right"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="swiper js-main-products-slider">
                    <div class="swiper-wrapper">
                        <?php echo do_shortcode('[hit_products]') ?>
                    </div>
                </div>
        </section>
        <!--Блог-->
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
                            <img class="news-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/new.png"
                                 alt="">
                            <span class="news-card__badge badge">New</span>
                        </a>
                        <div class="news-card__body">
                            <div class="date">
                                <svg class="icon">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#calendar"></use>
                                </svg>
                                <time datetime="2025-03-13">13 марта 2025</time>
                            </div>
                            <a href="">
                                <h3 class="news-card__title">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at, natus omnis
                                    rerum sunt vero.
                                </h3>
                            </a>
                            <p class="news-card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid atque,
                                distinctio doloremque harum
                                impedit laboriosam laudantium magni nemo omnis perspiciatis praesentium quod quos
                                ratione rerum saepe tempore
                                tenetur voluptatum!
                            </p>
                        </div>
                    </div>
                    <div class="news-card">
                        <a class="news-card__header" href="">
                            <img class="news-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/new.png"
                                 alt="">
                            <span class="news-card__badge badge">New</span>
                        </a>
                        <div class="news-card__body">
                            <div class="date">
                                <svg class="icon">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#calendar"></use>
                                </svg>
                                <time datetime="2025-03-13">13 марта 2025</time>
                            </div>
                            <a href="">
                                <h3 class="news-card__title">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at, natus omnis
                                    rerum sunt vero.
                                </h3>
                            </a>
                            <p class="news-card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid atque,
                                distinctio doloremque harum
                                impedit laboriosam laudantium magni nemo omnis perspiciatis praesentium quod quos
                                ratione rerum saepe tempore
                                tenetur voluptatum!
                            </p>
                        </div>
                    </div>
                    <div class="news-card">
                        <a class="news-card__header" href="">
                            <img class="news-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/new.png"
                                 alt="">
                            <span class="news-card__badge badge">New</span>
                        </a>
                        <div class="news-card__body">
                            <div class="date">
                                <svg class="icon">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#calendar"></use>
                                </svg>
                                <time datetime="2025-03-13">13 марта 2025</time>
                            </div>
                            <a href="">
                                <h3 class="news-card__title">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at, natus omnis
                                    rerum sunt vero.
                                </h3>
                            </a>
                            <p class="news-card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid atque,
                                distinctio doloremque harum
                                impedit laboriosam laudantium magni nemo omnis perspiciatis praesentium quod quos
                                ratione rerum saepe tempore
                                tenetur voluptatum!
                            </p>
                        </div>
                    </div>
                    <div class="news-card">
                        <a class="news-card__header" href="">
                            <img class="news-card__img" src="<?php echo get_template_directory_uri(); ?>/assets/new.png"
                                 alt="">
                            <span class="news-card__badge badge">New</span>
                        </a>
                        <div class="news-card__body">
                            <div class="date">
                                <svg class="icon">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#calendar"></use>
                                </svg>
                                <time datetime="2025-03-13">13 марта 2025</time>
                            </div>
                            <a href="">
                                <h3 class="news-card__title">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at, natus omnis
                                    rerum sunt vero.
                                </h3>
                            </a>
                            <p class="news-card__description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid atque,
                                distinctio doloremque harum
                                impedit laboriosam laudantium magni nemo omnis perspiciatis praesentium quod quos
                                ratione rerum saepe tempore
                                tenetur voluptatum!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Партнеры-->
        <section class="main-brands section">
            <div class="container">
                <div class="section__header">
                    <h2 class="section__title">Партнеры</h2>
                </div>

                <div class="swiper js-main-brands">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="main-brands__img"
                                 src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20282.51%2045.67'%3e%3cg%20id='Layer_2'%3e%3cg%20id='Ebene_1'%3e%3cpath%20class='cls-1'%20d='M40.31,42.83a9.37,9.37,0,0,1-2.52.32c-2.83,0-7.93-.95-10.71-8.19l-1.57-4.1H7.87l-5,12H0L17.64,1.26h1.89L33.38,35c2,4.72,3.47,6.3,6.93,6.61ZM8.82,28.34H24.25L16.69,10.08Z'/%3e%3cpath%20class='cls-1'%20d='M94,45.67c-9.14,0-11.66-4.1-11.66-13.55V7.87l-15.74,35H65.33L49,7.24V42.83H46.43V1.26h6L67.53,34,82.33,1.26H88V32.12c0,7.56,1.89,12.29,6,12.29Z'/%3e%3cpath%20class='cls-1'%20d='M116.68,0c12,0,19.52,9.7,19.52,22.05s-7.56,22-19.52,22-19.53-9.7-19.53-22S104.71,0,116.68,0Zm0,2.52c-8.19,0-13.23,7.56-13.23,19.53s5,19.52,13.23,19.52S129.9,34,129.9,22.05,124.87,2.52,116.68,2.52Z'/%3e%3cpath%20class='cls-1'%20d='M160.13,34c8.45-19.4,3.72-8.69,13.86-32.75h3l-18.08,42.2H157.8L143.19,8.63c-1.95-4.72-3.46-6.3-6.93-6.61V.76c.32,0,1.58-.13,2.14-.13,3.09,0,8,.82,11,8Z'/%3e%3cpath%20class='cls-1'%20d='M185.15,1.26h5.67v34c0,3.78.63,6.3,4.41,6.3h1.26v1.26h-5.67c-4.41,0-5.67-1.26-5.67-7.56Z'/%3e%3cpath%20class='cls-1'%20d='M204.29,8.82c0-3.78-1.26-6.3-5.67-6.3H198V1.26h4.1c4.09,0,6.61,1.45,8.5,3.78l22,27.4V1.26h2.52v42.2h-1.26L206.81,9.76V42.83h-2.52Z'/%3e%3cpath%20class='cls-1'%20d='M263,0c12,0,19.53,9.7,19.53,22.05s-7.56,22-19.53,22-19.53-9.7-19.53-22S251,0,263,0Zm0,2.52c-8.19,0-13.23,7.56-13.23,19.53s5,19.52,13.23,19.52S276.21,34,276.21,22.05,271.17,2.52,263,2.52Z'/%3e%3c/g%3e%3c/g%3e%3c/svg%3e"
                                 alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="main-brands__img" src="<?php echo get_template_directory_uri(); ?>/assets/plamen.svg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="main-brands__img"
                                 src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='312'%20height='64'%20viewBox='0%200%20312%2064'%20fill='currentColor'%3e%3cg%20clip-path='url(%23clip0)'%3e%3cpath%20d='M78.8001%208.69995C63.8001%208.69995%2051.6001%2020.9999%2051.6001%2036.0999C51.6001%2051.1999%2063.8001%2063.5%2078.8001%2063.5C93.8001%2063.5%20106%2051.1999%20106%2036.0999C106%2020.9999%2093.8001%208.69995%2078.8001%208.69995ZM78.8001%2063.2C65.8001%2063.2%2055.2001%2050.9%2055.2001%2036.2C55.2001%2021.5%2065.8001%209.19995%2078.8001%209.19995C91.8001%209.19995%20102.4%2021.5%20102.4%2036.2C102.4%2050.8%2091.8001%2063.2%2078.8001%2063.2Z'%20fill='currentColor'/%3e%3cpath%20d='M148.2%208.69995H147.8H131H127.3H111.2H110.8L107.3%2017.8H107.7L108.1%2016.7C109.9%2012.1%20114.2%209.09995%20119.1%209.09995H127.2V58.2C127.2%2061.4%20125.8%2063.2%20121.7%2063.2V63.5999H127.2H127.7H130.4H130.9H136.4V63.2C132.3%2063.2%20130.9%2061.4%20130.9%2058.2V9.09995H139.7C144.6%209.09995%20149%2012.1%20150.7%2016.7L151.1%2017.8H151.5L148.2%208.69995Z'%20fill='currentColor'/%3e%3cpath%20d='M43.6%208.8999H38.1V9.2999C42.2%209.2999%2043.6%2011.0999%2043.6%2014.2999V57.2999L9.7%208.8999H8.3H5.3H0V9.2999H1.8C4.1%209.2999%206.3%2010.3999%207.7%2012.3999L8.1%2012.9999V58.2999C8.1%2061.4999%206.7%2063.2999%202.6%2063.2999V63.6999H8.1H8.5H14V63.2999C9.9%2063.2999%208.5%2061.4999%208.5%2058.2999V13.5999L43.6%2063.6999H44V14.2999C44%2011.0999%2045.4%209.2999%2049.5%209.2999V8.8999H44H43.6Z'%20fill='currentColor'/%3e%3cpath%20d='M196.7%209.0001C201.6%209.0001%20206%2012.0001%20207.7%2016.6001L208.1%2017.7001H208.5L205%208.6001H182H173V9.0001C177%209.0001%20178.5%2010.8001%20178.5%2014.0001V27.3001C178.5%2031.6001%20181.5%2035.2001%20185.5%2036.0001C181.5%2036.8001%20178.5%2040.4001%20178.5%2044.7001V58.0001C178.5%2061.2001%20177.1%2063.0001%20173%2063.0001V63.4001H180.6H205.1L208.6%2054.3001H208.2L207.8%2055.4001C206%2060.0001%20201.7%2063.0001%20196.8%2063.0001H182.2V42.4001C182.2%2039.0001%20185%2036.2001%20188.4%2036.2001H190.4H200.9V35.8001H190.4H188.4C185%2035.8001%20182.2%2033.0001%20182.2%2029.6001V9.0001H196.7Z'%20fill='currentColor'/%3e%3cpath%20d='M160.1%209.1H160.5L167.2%200H163.6L160.1%209.1Z'%20fill='currentColor'/%3e%3cpath%20d='M311%2063.1001C308.3%2063.1001%20305.8%2061.5001%20304.7%2059.1001L285.4%208.7001H275.7V9.1001H277.5C277.7%209.1001%20277.8%209.1001%20278%209.1001C280.4%209.3001%20282.5%2010.8001%20283.6%2012.8001L266%2059.4001C265.1%2061.6001%20262.9%2063.1001%20260.5%2063.1001H259.3C257.4%2063.1001%20255.8%2062.0001%20254.5%2060.6001C252.9%2058.8001%20251.8%2056.7001%20250.7%2054.6001C249.4%2052.1001%20248.1%2049.7001%20246.4%2047.4001C244.7%2045.0001%20242.7%2042.8001%20240.2%2041.2001C238.1%2039.9001%20235.8%2039.0001%20233.4%2038.6001H238.8C247.1%2038.6001%20253.8%2031.9001%20253.8%2023.6001C253.8%2015.3001%20247.1%208.6001%20238.8%208.6001H227.3H218.1V9.0001C222.1%209.0001%20223.6%2010.8001%20223.6%2014.0001V25.4001V26.0001V58.0001C223.6%2061.2001%20222.2%2063.0001%20218.1%2063.0001V63.4001H223.6H226.8H227.3H232.8V63.0001C228.7%2063.0001%20227.3%2061.2001%20227.3%2058.0001V38.6001H229.4C229.5%2038.6001%20229.6%2038.6001%20229.8%2038.6001C232.3%2038.7001%20234.7%2039.6001%20236.7%2041.1001C238.8%2042.7001%20240.5%2044.9001%20242%2047.1001C243.6%2049.5001%20244.9%2051.9001%20246.5%2054.3001C247.9%2056.5001%20249.5%2058.7001%20251.5%2060.5001C253.4%2062.2001%20255.7%2063.3001%20258.3%2063.5001C258.6%2063.5001%20259%2063.5001%20259.3%2063.5001H264.4H264.8H270.4V63.1001H268.2C266.6%2063.1001%20265.6%2061.5001%20266.2%2060.1001L275.3%2036.2001H292.5L298.8%2053.2001L301.6%2060.1001C302.2%2061.5001%20301.1%2063.1001%20299.6%2063.1001H297.4V63.5001H300.6H303.1H306.7H308.8H312V63.1001H311V63.1001ZM227.4%2038.2001V9.0001H238.9C245.1%209.0001%20250.2%2015.5001%20250.2%2023.6001C250.2%2031.7001%20245.2%2038.2001%20238.9%2038.2001H227.4ZM275.3%2035.8001L283.8%2013.3001C283.8%2013.4001%20283.9%2013.5001%20283.9%2013.5001L292.2%2035.7001L275.3%2035.8001Z'%20fill='currentColor'/%3e%3c/g%3e%3cdefs%3e%3cclipPath%20id='clip0'%3e%3crect%20width='311.8'%20height='63.7'%20fill='currentColor'/%3e%3c/clipPath%3e%3c/defs%3e%3c/svg%3e"
                                 alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="main-brands__img" src="<?php echo get_template_directory_uri(); ?>/assets/manner.svg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="main-brands__img"
                                 src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20282.51%2045.67'%3e%3cg%20id='Layer_2'%3e%3cg%20id='Ebene_1'%3e%3cpath%20class='cls-1'%20d='M40.31,42.83a9.37,9.37,0,0,1-2.52.32c-2.83,0-7.93-.95-10.71-8.19l-1.57-4.1H7.87l-5,12H0L17.64,1.26h1.89L33.38,35c2,4.72,3.47,6.3,6.93,6.61ZM8.82,28.34H24.25L16.69,10.08Z'/%3e%3cpath%20class='cls-1'%20d='M94,45.67c-9.14,0-11.66-4.1-11.66-13.55V7.87l-15.74,35H65.33L49,7.24V42.83H46.43V1.26h6L67.53,34,82.33,1.26H88V32.12c0,7.56,1.89,12.29,6,12.29Z'/%3e%3cpath%20class='cls-1'%20d='M116.68,0c12,0,19.52,9.7,19.52,22.05s-7.56,22-19.52,22-19.53-9.7-19.53-22S104.71,0,116.68,0Zm0,2.52c-8.19,0-13.23,7.56-13.23,19.53s5,19.52,13.23,19.52S129.9,34,129.9,22.05,124.87,2.52,116.68,2.52Z'/%3e%3cpath%20class='cls-1'%20d='M160.13,34c8.45-19.4,3.72-8.69,13.86-32.75h3l-18.08,42.2H157.8L143.19,8.63c-1.95-4.72-3.46-6.3-6.93-6.61V.76c.32,0,1.58-.13,2.14-.13,3.09,0,8,.82,11,8Z'/%3e%3cpath%20class='cls-1'%20d='M185.15,1.26h5.67v34c0,3.78.63,6.3,4.41,6.3h1.26v1.26h-5.67c-4.41,0-5.67-1.26-5.67-7.56Z'/%3e%3cpath%20class='cls-1'%20d='M204.29,8.82c0-3.78-1.26-6.3-5.67-6.3H198V1.26h4.1c4.09,0,6.61,1.45,8.5,3.78l22,27.4V1.26h2.52v42.2h-1.26L206.81,9.76V42.83h-2.52Z'/%3e%3cpath%20class='cls-1'%20d='M263,0c12,0,19.53,9.7,19.53,22.05s-7.56,22-19.53,22-19.53-9.7-19.53-22S251,0,263,0Zm0,2.52c-8.19,0-13.23,7.56-13.23,19.53s5,19.52,13.23,19.52S276.21,34,276.21,22.05,271.17,2.52,263,2.52Z'/%3e%3c/g%3e%3c/g%3e%3c/svg%3e"
                                 alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="main-brands__img" src="<?php echo get_template_directory_uri(); ?>/assets/plamen.svg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="main-brands__img"
                                 src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='312'%20height='64'%20viewBox='0%200%20312%2064'%20fill='currentColor'%3e%3cg%20clip-path='url(%23clip0)'%3e%3cpath%20d='M78.8001%208.69995C63.8001%208.69995%2051.6001%2020.9999%2051.6001%2036.0999C51.6001%2051.1999%2063.8001%2063.5%2078.8001%2063.5C93.8001%2063.5%20106%2051.1999%20106%2036.0999C106%2020.9999%2093.8001%208.69995%2078.8001%208.69995ZM78.8001%2063.2C65.8001%2063.2%2055.2001%2050.9%2055.2001%2036.2C55.2001%2021.5%2065.8001%209.19995%2078.8001%209.19995C91.8001%209.19995%20102.4%2021.5%20102.4%2036.2C102.4%2050.8%2091.8001%2063.2%2078.8001%2063.2Z'%20fill='currentColor'/%3e%3cpath%20d='M148.2%208.69995H147.8H131H127.3H111.2H110.8L107.3%2017.8H107.7L108.1%2016.7C109.9%2012.1%20114.2%209.09995%20119.1%209.09995H127.2V58.2C127.2%2061.4%20125.8%2063.2%20121.7%2063.2V63.5999H127.2H127.7H130.4H130.9H136.4V63.2C132.3%2063.2%20130.9%2061.4%20130.9%2058.2V9.09995H139.7C144.6%209.09995%20149%2012.1%20150.7%2016.7L151.1%2017.8H151.5L148.2%208.69995Z'%20fill='currentColor'/%3e%3cpath%20d='M43.6%208.8999H38.1V9.2999C42.2%209.2999%2043.6%2011.0999%2043.6%2014.2999V57.2999L9.7%208.8999H8.3H5.3H0V9.2999H1.8C4.1%209.2999%206.3%2010.3999%207.7%2012.3999L8.1%2012.9999V58.2999C8.1%2061.4999%206.7%2063.2999%202.6%2063.2999V63.6999H8.1H8.5H14V63.2999C9.9%2063.2999%208.5%2061.4999%208.5%2058.2999V13.5999L43.6%2063.6999H44V14.2999C44%2011.0999%2045.4%209.2999%2049.5%209.2999V8.8999H44H43.6Z'%20fill='currentColor'/%3e%3cpath%20d='M196.7%209.0001C201.6%209.0001%20206%2012.0001%20207.7%2016.6001L208.1%2017.7001H208.5L205%208.6001H182H173V9.0001C177%209.0001%20178.5%2010.8001%20178.5%2014.0001V27.3001C178.5%2031.6001%20181.5%2035.2001%20185.5%2036.0001C181.5%2036.8001%20178.5%2040.4001%20178.5%2044.7001V58.0001C178.5%2061.2001%20177.1%2063.0001%20173%2063.0001V63.4001H180.6H205.1L208.6%2054.3001H208.2L207.8%2055.4001C206%2060.0001%20201.7%2063.0001%20196.8%2063.0001H182.2V42.4001C182.2%2039.0001%20185%2036.2001%20188.4%2036.2001H190.4H200.9V35.8001H190.4H188.4C185%2035.8001%20182.2%2033.0001%20182.2%2029.6001V9.0001H196.7Z'%20fill='currentColor'/%3e%3cpath%20d='M160.1%209.1H160.5L167.2%200H163.6L160.1%209.1Z'%20fill='currentColor'/%3e%3cpath%20d='M311%2063.1001C308.3%2063.1001%20305.8%2061.5001%20304.7%2059.1001L285.4%208.7001H275.7V9.1001H277.5C277.7%209.1001%20277.8%209.1001%20278%209.1001C280.4%209.3001%20282.5%2010.8001%20283.6%2012.8001L266%2059.4001C265.1%2061.6001%20262.9%2063.1001%20260.5%2063.1001H259.3C257.4%2063.1001%20255.8%2062.0001%20254.5%2060.6001C252.9%2058.8001%20251.8%2056.7001%20250.7%2054.6001C249.4%2052.1001%20248.1%2049.7001%20246.4%2047.4001C244.7%2045.0001%20242.7%2042.8001%20240.2%2041.2001C238.1%2039.9001%20235.8%2039.0001%20233.4%2038.6001H238.8C247.1%2038.6001%20253.8%2031.9001%20253.8%2023.6001C253.8%2015.3001%20247.1%208.6001%20238.8%208.6001H227.3H218.1V9.0001C222.1%209.0001%20223.6%2010.8001%20223.6%2014.0001V25.4001V26.0001V58.0001C223.6%2061.2001%20222.2%2063.0001%20218.1%2063.0001V63.4001H223.6H226.8H227.3H232.8V63.0001C228.7%2063.0001%20227.3%2061.2001%20227.3%2058.0001V38.6001H229.4C229.5%2038.6001%20229.6%2038.6001%20229.8%2038.6001C232.3%2038.7001%20234.7%2039.6001%20236.7%2041.1001C238.8%2042.7001%20240.5%2044.9001%20242%2047.1001C243.6%2049.5001%20244.9%2051.9001%20246.5%2054.3001C247.9%2056.5001%20249.5%2058.7001%20251.5%2060.5001C253.4%2062.2001%20255.7%2063.3001%20258.3%2063.5001C258.6%2063.5001%20259%2063.5001%20259.3%2063.5001H264.4H264.8H270.4V63.1001H268.2C266.6%2063.1001%20265.6%2061.5001%20266.2%2060.1001L275.3%2036.2001H292.5L298.8%2053.2001L301.6%2060.1001C302.2%2061.5001%20301.1%2063.1001%20299.6%2063.1001H297.4V63.5001H300.6H303.1H306.7H308.8H312V63.1001H311V63.1001ZM227.4%2038.2001V9.0001H238.9C245.1%209.0001%20250.2%2015.5001%20250.2%2023.6001C250.2%2031.7001%20245.2%2038.2001%20238.9%2038.2001H227.4ZM275.3%2035.8001L283.8%2013.3001C283.8%2013.4001%20283.9%2013.5001%20283.9%2013.5001L292.2%2035.7001L275.3%2035.8001Z'%20fill='currentColor'/%3e%3c/g%3e%3cdefs%3e%3cclipPath%20id='clip0'%3e%3crect%20width='311.8'%20height='63.7'%20fill='currentColor'/%3e%3c/clipPath%3e%3c/defs%3e%3c/svg%3e"
                                 alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="main-brands__img" src="<?php echo get_template_directory_uri(); ?>/assets/manner.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Услуги-->
        <section class="services section">
            <div class="container services__grid">
                <div class="services__item">
                    <div class="services__item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/007.jpg" alt="">
                    </div>
                    <div class="services__item-content">
                        <h2 class="services__item-title">Декор под ключ</h2>
                        <p class="services__item-text">
                            Готовые решения для интерьера <br> с учётом всех пожеланий.
                        </p>
                        <a href="" class="button button--outline">Подробнее</a>
                    </div>
                </div>

                <div class="services__item">
                    <div class="services__item-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/008.jpg" alt="">
                    </div>
                    <div class="services__item-content">
                        <h2 class="services__item-title">Изготовление форм</h2>
                        <p class="services__item-text">Точные и надёжные силиконовые формы <br> для вашего производства.
                        </p>
                        <a href="" class="button button--outline">Подробнее</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Вопросы-->
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
                                чтобы избежать
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
                                обсуждаются индивидуально.
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
                                расчета стоимости.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
