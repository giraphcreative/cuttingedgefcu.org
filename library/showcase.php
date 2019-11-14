<?php


function the_showcase() {

	// get the slides
	$slides = get_post_meta( get_the_ID(), CMB_PREFIX . "showcase", 1 );

	if ( !empty( $slides ) ) {
		?>
		<div class="showcase">
		<?php
		$count = 0;
		foreach ( $slides as $key => $slide ) {
			if ( !empty( $slide["image"] ) ) {

				// store the title and subtitle
				$title = ( isset( $slide["title"] ) ? $slide["title"] : '' );
				$subtitle = ( isset( $slide["subtitle"] ) ? $slide["subtitle"] : '' );
				$link = ( isset( $slide["link"] ) ? $slide["link"] : '' );
				$alt = ( isset( $slide['alt-text'] ) ? $slide["alt-text"] : "Link to " . $link );

				// check if it's an image or video
				if ( p_is_image( $slide["image"] ) ) {
					// it's an image, so resize it and generate an img tag.
					$image = '<img src="' . $slide["image"] . '" alt="' . $alt . '">';
				} else {
					// it's a video, so oEmbed that stuffs, yo
					$image = apply_filter( 'the_content', $slide["image"] );
				}

				?>
			<div class="slide<?php print ( $key == 0 ? ' visible' : '' ); ?>">
				<?php if ( !empty( $link ) ) { ?><a href="<?php print $link ?>" class="<?php print ( stristr( $link, 'vimeo' ) || stristr( $link, 'youtube' ) || stristr( $link, 'google.com/maps' ) ? 'lightbox-iframe' : '' ) ?>"><?php } ?>
				<?php print $image; ?>
				<?php if ( !empty( $link ) ) { ?></a><?php } ?>
				
				<?php if ( !empty( $title ) || !empty( $subtitle ) ) { ?>
				<div class="slide-content">
					<?php if ( !empty( $title ) ) { ?><h1><?php print $title; ?></h1><?php } ?>
					<?php if ( !empty( $subtitle ) ) { ?><h2><?php print $subtitle; ?></h2><?php } ?>
				</div>
				<?php } ?>
			</div>
				<?php
				$count++;
			}
		}

		if ( $count > 1 ) { 
			?>
			<div class="showcase-nav">
				<a class="previous">Previous Slide</a>
				<a class="next">Next Slide</a>
			</div>
			<?php
		}
		?>
		</div>
		<?php
	}
}



// ad showcase
function the_ad_showcase() {

	$ads = get_cmb_value( 'ad_showcase' );

	if ( !empty( $ads[0]['link'] ) && !empty( $ads[0]['image'] ) ) { ?>
	<div class="quarter">
		<a href="<?php print $ads[0]['link']; ?>"><img src="<?php print $ads[0]['image']; ?>" alt="<?php print ( !empty( $ads[0]['alt-text'] ) ? $ads[0]['alt-text'] : "Link to " . $ads[0]['link'] ); ?>"></a>
	</div>
	<?php } 

	if ( !empty( $ads[1]['link'] ) && !empty( $ads[1]['image'] ) ) { ?>
	<div class="quarter">
		<a href="<?php print $ads[1]['link']; ?>"><img src="<?php print $ads[1]['image']; ?>" alt="<?php print ( !empty( $ads[1]['alt-text'] ) ? $ads[1]['alt-text'] : "Link to " . $ads[1]['link'] ); ?>"></a>
	</div>
	<?php } 

	if ( !empty( $ads[2]['link'] ) && !empty( $ads[2]['image'] ) ) { ?>
	<div class="quarter">
		<a href="<?php print $ads[2]['link']; ?>"><img src="<?php print $ads[2]['image']; ?>" alt="<?php print ( !empty( $ads[2]['alt-text'] ) ? $ads[2]['alt-text'] : "Link to " . $ads[2]['link'] ); ?>"></a>
	</div>
	<?php } 

	if ( !empty( $ads[3]['link'] ) && !empty( $ads[3]['image'] ) ) { ?>
	<div class="quarter">
		<a href="<?php print $ads[3]['link']; ?>"><img src="<?php print $ads[3]['image']; ?>" alt="<?php print ( !empty( $ads[3]['alt-text'] ) ? $ads[3]['alt-text'] : "Link to " . $ads[3]['link'] ); ?>"></a>
	</div>
	<?php } 

}



// ad showcase
function the_icon_showcase() {

	$icons = get_cmb_value( 'icon_showcase' );

	if ( !empty( $icons[0]['link'] ) && !empty( $icons[0]['image'] ) && !empty( $icons[0]['title'] ) ) { ?>
	<div class="fifth">
		<a href="<?php print $icons[0]['link']; ?>">
			<img src="<?php print $icons[0]['image']; ?>" alt="<?php print ( !empty( $icons[0]['alt-text'] ) ? $icons[0]['alt-text'] : $icons[0]['title'] ); ?>">
			<h5><?php print $icons[0]['title']; ?></h5>
		</a>
	</div>
	<?php } 

	if ( !empty( $icons[1]['link'] ) && !empty( $icons[1]['image'] ) && !empty( $icons[1]['title'] ) ) { ?>
	<div class="fifth">
		<a href="<?php print $icons[1]['link']; ?>">
			<img src="<?php print $icons[1]['image']; ?>" alt="<?php print ( !empty( $icons[1]['alt-text'] ) ? $icons[1]['alt-text'] : $icons[1]['title'] ); ?>">
			<h5><?php print $icons[1]['title']; ?></h5>
		</a>
	</div>
	<?php } 

	if ( !empty( $icons[2]['link'] ) && !empty( $icons[2]['image'] ) && !empty( $icons[2]['title'] ) ) { ?>
	<div class="fifth">
		<a href="<?php print $icons[2]['link']; ?>">
			<img src="<?php print $icons[2]['image']; ?>" alt="<?php print ( !empty( $icons[2]['alt-text'] ) ? $icons[2]['alt-text'] : $icons[2]['title'] ); ?>">
			<h5><?php print $icons[2]['title']; ?></h5>
		</a>
	</div>
	<?php } 

	if ( !empty( $icons[3]['link'] ) && !empty( $icons[3]['image'] ) && !empty( $icons[3]['title'] ) ) { ?>
	<div class="fifth">
		<a href="<?php print $icons[3]['link']; ?>">
			<img src="<?php print $icons[3]['image']; ?>" alt="<?php print ( !empty( $icons[3]['alt-text'] ) ? $icons[3]['alt-text'] : $icons[3]['title'] ); ?>">
			<h5><?php print $icons[3]['title']; ?></h5>
		</a>
	</div>
	<?php } 

	if ( !empty( $icons[4]['link'] ) && !empty( $icons[4]['image'] ) && !empty( $icons[4]['title'] ) ) { ?>
	<div class="fifth">
		<a href="<?php print $icons[4]['link']; ?>">
			<img src="<?php print $icons[4]['image']; ?>" alt="<?php print ( !empty( $icons[4]['alt-text'] ) ? $icons[4]['alt-text'] : $icons[4]['title'] ); ?>">
			<h5><?php print $icons[4]['title']; ?></h5>
		</a>
	</div>
	<?php } 

}



?>