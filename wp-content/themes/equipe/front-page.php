<?php wp_head(); ?>
    <?php get_header();?>
    <main>
        <section class='container'>
            <div class="main-wrap">
                <section class='page-title'>
                    <h2>Фрилансер Веб-разработчик<span>/Веб-дизайнер</span><br>
                    Специализируюсь на Верстке и сайтах на различных CMS</h2>
                </section>
                <section class="main-promo">
                    <div class='promo__image'>
                        <img class="mackbook" src="<?php bloginfo("template_directory");?>/images/MacBook.png" alt="Desktop">
                        <img class="ipad" src="<?php bloginfo("template_directory");?>/images/IPAD.png" alt="Table">
                        <img class="iphone12"src="<?php bloginfo("template_directory");?>/images/iphone.png" alt="Mobile">
                    </div>
                    <div class="promo__offer">
                        <h1>Отзывчивая и Валидная<br> верcтка под разничные CMS </h1>
                        <div class='wrap__btn'>
                            <a class='btn' href='http://equipecreative.ru.com/portfolio/'>Посмотреть работы <span class='btn-arrow'>></span></a>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section>
            <div class='main-option_wrap'>
                <div class="main-options">
                    <div class='options__item'>
                        <img src="<?php bloginfo("template_directory");?>/images/Layout.png" alt="">
                        <p>Адаптивная и кроссбраузерная верстка в короткие сроки</p>
                        <a href='http://equipecreative.ru.com/portfolio/website-layout/' class='btn'>Узнать больше <span class='btn-arrow'>></span></a>
                    </div>
                    <div class='options__item'>
                        <img src="<?php bloginfo("template_directory");?>/images/shop.png" alt="">
                        <p>Создание полностью функциональных интернет-магазинов</p>
                        <a href='http://equipecreative.ru.com/portfolio/online-store/' class='btn'>Узнать больше <span class='btn-arrow'>></span></a>
                    </div>
                    <div class='options__item'>
                        <img src="<?php bloginfo("template_directory");?>/images/WP.png" alt="">
                        <p>Посадка и создание сайтов под "ключ" на CMS Wordpress</p>
                        <a href='http://equipecreative.ru.com/portfolio/site-development/' class='btn'>Узнать больше <span class='btn-arrow'>></span></a>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
<?php get_footer();?>
