	<div class="pad blog in-the-community">
		<img src="<?php bloginfo( 'template_url' ); ?>/img/title-community.png" class="blog-title" />
		<div class="blog-listing">
		<?php
		$args = array(
			'post_type' => array( 'post', 'event' ),
			'posts_per_page' => 3
		);

		// The Query
		$the_query = new WP_Query( $args );
		 
		// The Loop
		if ( $the_query->have_posts() ) { 
		    while ( $the_query->have_posts() ) { 
		    	?>
	    <div class="entry">
		    <?php $the_query->the_post(); ?>
		    <?php the_post_thumbnail(); ?>
		    <h3><a href="<?php the_permalink(); ?>"><?php print get_the_title(); ?></a></h3>
		    <p><?php the_excerpt(); ?></p>
		    <a href="<?php the_permalink() ?>" class="btn arrow">Read More</a>
		</div>
		    	<?php 
			}
	    }
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
		</div>
	</div>
