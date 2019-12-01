<?php
/*
Home/catch-all template
*/

get_header(); ?>


	<div class="main-content pad" role="main">

		<?php
		if ( is_search() ) {
			?><h1>Search Results for <span>'<?php print $_REQUEST["s"]; ?>'</span></h1><?php
		} else {
			?><h1>Our Blog</h1><?php
		}

		if ( have_posts() ) : 

			// Start the Loop.
			while ( have_posts() ) : the_post(); 
				$post_type = get_post_type();
				?>
				<hr />
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
				<p class="quiet">Posted by <?php print get_the_author_link() ?> in <?php print ( $post_type != 'post' ? ucfirst( $post_type ) . "s" : get_the_category_list( ', ' ) ); ?>.</p>
				<?php
			endwhile;

		else :

			print "<p>There are currently no posts to list here.</p>";

		endif;
		?>

	</div><!-- #primary -->

	<?php pagination(); ?>

<?php get_footer(); ?>