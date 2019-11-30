<?php

get_header();

?>

	<?php the_showcase(); ?>
	
	<div class="content-two-column" role="main">
		<div class="three-quarter right">
			<?php 
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 
					?>
				<h1 class="post-title"><?php the_title(); ?></h1>
					<?php
					the_content();
				endwhile;
			endif;
			?>
		</div>
		<div class="sidebar quarter right">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-generic') ) : ?>no sidebar selected<?php endif; ?>
		</div>
	</div><!-- #content -->
	
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

	<?php the_accordion(); ?>

<?php

get_footer();

?>