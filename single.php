<?php
/**
 * The Template for displaying all single posts
 */

get_header();

?>

	<div class="main-content pad" role="main">
		<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 

				if ( in_category( 'financial-literacy' ) ) {
					?>
		<h1><?php the_title(); ?></h1>
		<hr>

		<div class="blog-columns">
			<div class="blog-content">
				<?php the_content(); ?>
			</div>
			<div class="aside">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-blog') ) : ?><!-- no sidebar --><?php endif; ?>
			</div>
		</div>
					<?php
				} else {
					?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php
				}
			endwhile;
		endif;
		?>
	</div>

<?php

get_footer();

?>