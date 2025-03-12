<?php
/**
 * demud functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package demud
 */


add_action('after_setup_theme', function () {
    add_theme_support('woocommerce');
});


if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function demud_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on demud, use a find and replace
        * to change 'demud' to the name of your theme in all the template files.
        */
    load_theme_textdomain('demud', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'demud'),
        )
    );

    /*
        * Переключите стандартную разметку ядра для формы поиска, формы комментариев и комментариев
        * для вывода валидного HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Настройте функцию пользовательского фона ядра WordPress.
    add_theme_support(
        'custom-background',
        apply_filters(
            'demud_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Добавьте поддержку темы для выборочного обновления виджетов.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Добавьте поддержку основных пользовательских логотипов.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'demud_setup');

/**
 * Установите ширину содержимого в пикселях, основываясь на дизайне и таблице стилей темы.
 *
 *  Приоритет 0, чтобы сделать его доступным для обратных вызовов с более низким приоритетом.
 *
 * @global int $content_width
 */
function demud_content_width()
{
    $GLOBALS['content_width'] = apply_filters('demud_content_width', 640);
}

add_action('after_setup_theme', 'demud_content_width', 0);

/**
 * Зарегистрируйте область виджетов.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function demud_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'demud'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'demud'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'demud_widgets_init');

/**
 * Записать скрипты и стили.
 */
function demud_scripts()
{
    wp_enqueue_style('demud-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('demud-style', 'rtl', 'replace');

    wp_enqueue_script('demud-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
    wp_enqueue_script('demud-main-js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'demud_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Подключение кастомного класса для элементов списка <ul>
 */
require get_template_directory() . '/inc/class-demud-header-menu.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

