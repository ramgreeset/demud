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
        <div class="footer__container">
            <div class="footer__item">
                <a class="logo" href="/">DEMUD</a>
                <span class="footer__text">Минимализм в цветах и деталях...</span>

                <div class="social">
                    <ul class="social__list">
                        <li class="social__item">
                            <a class="social__link" href="">
                                <svg class="icon">
                                    <use xlink:href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#telegram"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="">
                                <svg class="icon">
                                    <use xlink:href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#instagram"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="social__link" href="">
                                <svg class="icon">
                                    <use xlink:href="<?php echo get_template_directory_uri()?>/assets/sprite-BRnjzVwh.svg#pinterest"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>      </div>

            <div class="footer__grid">
                <div class="footer__item">
                    <span class="footer__title">Компания</span>
                    <ul class="footer__list">
                        <li>
                            <a href="">О нас</a>
                        </li>
                        <li>
                            <a href="">Новости</a>
                        </li>
                        <li>
                            <a href="">Галерея</a>
                        </li>
                        <li>
                            <a href="">Контакты</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__item">
                    <span class="footer__title">Документы</span>
                    <ul class="footer__list">
                        <li>
                            <a href="">Сотрудничество</a>
                        </li>
                        <li>
                            <a href="">Презентация</a>
                        </li>
                        <li>
                            <a href="">Коммерческое предложение</a>
                        </li>
                        <li>
                            <a href="">Политика конфиденциальности</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer__copy">
            <span class="footer__text">&copy; 2025 DEMUD. Все права защищены.</span>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
