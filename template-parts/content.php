 <?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vona_Creative
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	

	<header class="entry-header">


		<!--SINGLE POST THUMBNAILS -->
		<?php 
		if ( has_post_thumbnail() ) { ?>
			<figure class="featured-image">
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
					<?php the_post_thumbnail();?></a>
			</figure>
		<?php }
		?>

	</header><!-- .entry-header -->
	

	<div class="entry-content">
	

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vonacreative' ),
				'after'  => '</div>',
			) );
		?>


	</div><!-- .entry-content -->

</article><!-- #post-## -->
