<?php

/*
Template Name: Page - Home
*/

get_header();

?>
	
	<div class="home-showcase">
	<?php the_showcase(); ?>
		<div class="online-branch">
			<img src="<?php bloginfo( 'template_url' ); ?>/img/title-online-branch.png" />
			<input type="text" name="username" placeholder="Username" />
			<input type="submit" name="submit" class="arrow" />
		</div>
	</div>

	<div class="home-pad content">
			<?php 
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 
					the_content();
				endwhile;
			endif;
			?>
		<div class="home-pad icons text-center group">
				
			<?php the_icon_showcase(); ?>

		</div>
	</div>

	<div class="home-pad bg-grey-light group" role="main">
		
		<?php the_ad_showcase(); ?>

	</div>


	<?php include( "part-blog.php" ); ?>

<?php 

get_footer();

?>