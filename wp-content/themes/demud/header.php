<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demud
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="layout">
    <header class="header">
        <div class="container header__container">
            <a class="logo" href="<?php home_url(); ?>"><?php bloginfo('name'); ?></a>
            <div class="header__buttons">
                <div class="social">
                    <ul class="social__list">
                        <li class="social__item">
                            <a class="social__link" href="">
                                <svg class="icon">
                                    <use xlink:href="<?php echo get_template_directory_uri();; ?>/assets/sprite-BRnjzVwh.svg#telegram"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="">
                                <svg class="icon">
                                    <use xlink:href="<?php echo get_template_directory_uri();; ?>/assets/sprite-BRnjzVwh.svg#instagram"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="">
                                <svg class="icon">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite-BRnjzVwh.svg#pinterest"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="header__button">
                    <svg class="icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite-BRnjzVwh.svg#handbag"></use>
                    </svg>
                    <span class="header__button-count">0</span>
                </button>

                <button class="header__button js-menu-button">
                    <svg class="icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite-BRnjzVwh.svg#list"></use>
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <div class="menu js-menu">
        <div class="menu__container">
            <?php wp_nav_menu([
                'theme_location' => 'header-menu',
                'container' => false,
                'menu_class' => 'menu__list',
                'walker' => new Demud_Header_Menu(),
            ]); ?>
            <!--            <ul class="menu__list">-->
            <!--                <li class="menu__item">-->
            <!--                    <a class="menu__link" href="">Главная</a>-->
            <!--                </li>-->
            <!--                <li class="menu__item">-->
            <!--                    <a class="menu__link" href="">О нас</a>-->
            <!--                </li>-->
            <!--                <li class="menu__item">-->
            <!--                    <a class="menu__link" href="">Магазин</a>-->
            <!--                </li>-->
            <!--                <li class="menu__item">-->
            <!--                    <a class="menu__link" href="">Новости</a>-->
            <!--                </li>-->
            <!--                <li class="menu__item">-->
            <!--                    <a class="menu__link" href="">Галерея</a>-->
            <!--                </li>-->
            <!--                <li class="menu__item">-->
            <!--                    <a class="menu__link" href="">Контакты</a>-->
            <!--                </li>-->
            <!--            </ul>-->
        </div>
    </div>

