<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div class="large-title">
		<h1><?php printf( single_cat_title( '', false ) ); ?></h1>
	</div>

	<div class="main-content pad" role="main">

		<div class="blog-columns">
			<div class="blog-listing">
		<?php 
		if ( have_posts() ) : 

			while ( have_posts() ) : the_post(); 
				?>
			    <div class="entry">
				    <?php the_post_thumbnail( array( 768, 480 ) ); ?>
				    <h3><a href="<?php the_permalink(); ?>"><?php print get_the_title(); ?></a></h3>
				    <p><?php the_excerpt(); ?></p>
				    <a href="<?php the_permalink() ?>" class="btn arrow">Read More</a>
				</div>
				<?php
			endwhile;

		endif;
		?>
			</div>
			<div class="aside">
				<h4>Quick Links</h4>
				<?php wp_nav_menu( array( 'theme_location' => 'blog-menu', 'menu_class' => 'nav-menu' ) ); ?>
				<?php print apply_filters( 'the_content', do_shortcode('[snippet slug="blog-sidebar-bottom" /]')) ?>
			</div>
		</div><!-- #content -->
	</div><!-- #content -->

	<?php pagination(); ?>

<?php

get_footer();

?>