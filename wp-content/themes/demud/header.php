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
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="layout">
    <header class="header">
        <div class="container header__container">
            <a class="logo" href="<?php echo home_url();?>"><?php bloginfo('name');?></a>
            <div class="header__buttons">
                <button class="header__button button button--icon">
                    <svg class="icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#user"></use>
                    </svg>
                </button>

                <button class="header__button button button--icon">
                    <svg class="icon">
                        <use xlink:href="<?php echo get_template_directory_uri()?>/assets/sprite.svg#heart"></use>
                    </svg>
                </button>

                <button class="header__button button button--icon">
                    <svg class="icon">
                        <use xlink:href="<?php echo get_template_directory_uri()?>/assets/sprite.svg#handbag"></use>
                    </svg>
                    <span class="header__button-count chip">0</span>
                </button>

                <button class="header__button button button--icon js-menu-button">
                    <svg class="icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#list"></use>
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
            <div class="social">
                <ul class="social__list">
                    <li class="social__item">
                        <a class="social__link button button--icon" href="">
                            <svg class="icon">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#telegram"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="social__item">
                        <a class="social__link button button--icon" href="">
                            <svg class="icon">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#instagram"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="social__item">
                        <a class="social__link button button--icon" href="">
                            <svg class="icon">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#pinterest"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

