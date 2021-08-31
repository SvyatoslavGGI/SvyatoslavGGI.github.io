<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Equipe
 */

?>
            </div>
        </section>
    </main><!-- #content -->

	<footer>
        <section class="container">
            <div class='footer-wrap'>
                <span class='footnote'>Made by SvyatoslavGGi</span>
                <nav class="footer-link ">
                    <?php wp_nav_menu( [
						'menu' => 'Social'
							]); ?>
                </nav>
            </div>
            <div class='footer-wrap adaptive-block'>
                <nav class="footer-nav">
                    <?php wp_nav_menu( [
									'menu' => 'Navigation'
								]); ?>
                </nav>
            </div>
        </section>
    </footer>
	<div class='overlay' id='overlay-modal'>
        <div class='form-modal'>
            <span class='close-modal'>&times;</span>
            <form class='contact-form' action="">
                <label for="name">Введите ваше Имя</label>
                <input name='name' type="text">
                <label for="email">Введите ваш Email</label>
                <input name='email' type="email">
                <label for="comment">Комментарий</label>
                <input name='comment' type="textarea">
            </form>
        </div>
    </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
