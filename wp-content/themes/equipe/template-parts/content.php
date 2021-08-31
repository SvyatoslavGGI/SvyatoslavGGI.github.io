<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Equipe
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<h2><?php echo get_the_title(); ?> </h2>
	</div>
	<p><?php get_post();?></p>


</article><!-- #post-<?php the_ID(); ?> -->
