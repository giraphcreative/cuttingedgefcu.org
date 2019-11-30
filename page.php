<?php

get_header();

?>

	<?php the_showcase(); ?>

	<?php the_large_title(); ?>
		
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