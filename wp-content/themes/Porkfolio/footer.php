<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Porkfolio
 * @since Porkfolio 1.0
 */

?>
        </div>
    </main><!-- #content -->

	<footer>
        <section class="container">
            <div class='footer-wrap'>
                <nav class="footer-link">
                    <?php wp_nav_menu( [
						'menu' => 'Social'
							]); ?>
                </nav>
            </div>
            <div class='footer-wrap'>
                <nav class="footer-nav">
                    <?php wp_nav_menu( [
									'menu' => 'Navigation'
								]); ?>
                </nav>
            </div>
        </section>
    </footer>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
