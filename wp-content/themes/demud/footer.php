<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demud
 */

?>

<footer class="footer">
    <div class="container">
        <div class="footer__container grid grid--cols-1-2">
            <div class="footer__item">
                <a class="logo" href="<?php echo home_url(); ?>">
                    <svg class="logo__icon">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#demud"></use>
                    </svg>
                </a>
                <span class="footer__text">Минимализм в цветах и деталях...</span>

                <ul class="footer__list">
                    <li>
                        <svg class="icon">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#map-pin"></use>
                        </svg>
                        г. Москва
                    </li>
                    <li>
                        <svg class="icon">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#phone"></use>
                        </svg>
                        <a href="tel:+7(918)335-03-07" class="link">+7(918)335-03-07</a>
                    </li>
                    <li>
                        <svg class="icon">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/sprite.svg#envelope"></use>
                        </svg>
                        <a href="mailto:demud.box@gmail.com" class="link">demud.box@gmail.com</a>
                    </li>
                </ul>

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
                </div>      </div>

            <div class="footer__links">
                <div class="footer__item">
                    <span class="footer__title">Компания</span>
                    <ul class="footer__list">
                        <li>
                            <a href="" class="link">О нас</a>
                        </li>
                        <li>
                            <a href="" class="link">Магазин</a>
                        </li>
                        <li>
                            <a href="" class="link">Блог</a>
                        </li>
                        <li>
                            <a href="" class="link">Контакты</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__item">
                    <span class="footer__title">Услуги</span>
                    <ul class="footer__list">
                        <li>
                            <a href="" class="link">Декор под ключ</a>
                        </li>
                        <li>
                            <a href="" class="link">Изготовление форм</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__item">
                    <span class="footer__title">Документы</span>
                    <ul class="footer__list">
                        <li>
                            <a href="" class="link">Презентация</a>
                        </li>
                        <li>
                            <a href="" class="link">Коммерческое предложение</a>
                        </li>
                        <li>
                            <a href="" class="link">Политика конфиденциальности</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer__copy">
            <span class="footer__text">&copy; 2025 DEMUD. Все права защищены.</span>
        </div>
    </div>
</footer></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>


