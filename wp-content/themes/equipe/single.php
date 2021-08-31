<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Equipe
 */
?>
<div class='wrapper'>
<?php get_header();?>

	<main id="primary" class="post-content site-main">
		<section class='page-title'>
            <h2>Фрилансер Веб-разработчик<span>/Веб-дизайнер</span><br>
                Специализируюсь на Верстке и сайтах на различных CMS</h2>
        </section>
		<section class='container'>
		<?php
		while ( have_posts() ) :
			the_post();
			
			get_template_part( 'template-parts/content', get_post_type() );
			the_content();
			?>
		</section>
		<div class='navlink-wrap'>
			<?php
			
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle"><</span>' . '</span> <span class="nav-title">%title</span>',
					'next_text' => '</span> <span class="nav-title">%title</span>' . '<span class="nav-subtitle"> ></span>',
					'in_same_term' => true,
				)
			);

		endwhile; // End of the loop.
		?>
		</div>

		
	</main><!-- #main -->

<?php get_footer();?>
</div>
