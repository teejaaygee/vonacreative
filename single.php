<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Vona_Creative
 */
 
?>

<?php 

	get_header('single');

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-single', get_post_format() );

			the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();