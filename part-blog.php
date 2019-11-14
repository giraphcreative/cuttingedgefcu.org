
<div class="blog in-the-community">
	<img src="<?php bloginfo( 'template_url' ); ?>/img/title-community.png" class="blog-title" />
	<?php
	// The Query
	$the_query = new WP_Query( $args );
	 
	// The Loop
	if ( $the_query->have_posts() ) { 
	    while ( $the_query->have_posts() ) {?>
    <div class="entry">
	    <?php $the_query->the_post(); ?>
	    <h3><a href="' . get_the_permalink() . '"' . get_the_title() . '</h3>';
	    <p><?php the_excerpt(); ?></p>
	    <?php } ?>
	</div>
	    <?php 
	} else {
	    // no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();
	?>
</div>
