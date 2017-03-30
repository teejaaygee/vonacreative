<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vona_Creative
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<br />
		<h1 style="text-align: center"> PORTFOLIO &amp; PROJECTS </h1>
		<br/>

		<?php echo do_shortcode("[pt_view id=0e9b57aj39]"); ?>

		
		</div>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

