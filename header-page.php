<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vona_Creative
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vonacreative' ); ?></a>


	<?php if ( get_header_image() ) { ?>

		<header id="masthead" class="site-header-single" style="background-image: url(<?php header_image(); ?>);" role="banner">

	<?php } else { ?>

		<header id="masthead" class="site-header" role="banner">
	
	<?php } ?>

	<!--NAVIGATION -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	<div class="single-header-title">
	<?php the_title( ); ?>
	</div>

	</header><!-- #masthead -->

	



	<div id="content" class="site-content">
