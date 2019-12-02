<?php

/*
Template Name: Page - Home
*/

get_header();

?>
	
	<div class="home-showcase">
		<?php the_showcase(); ?>
		<?php include( 'part-online-branch.php' ); ?>
	</div>
	
	<div class="main-content pad">
		<div class="inner">
			<?php 
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 
					the_content();
				endwhile;
			endif;
			?>
		</div>

		<div class="icons text-center group">
			<?php the_icon_showcase(); ?>
		</div>
	</div>

	<div class="bg-grey-dark group" role="main">
		<?php the_promo(); ?>
	</div>

	<?php include( 'part-blog.php' ); ?>

	<?php the_accordion(); ?>

<?php 

get_footer();

?>