<?php


function the_accordion() {

	// get the slides
	$boxes = get_post_meta( get_the_ID(), CMB_PREFIX . "accordion", 1 );

	if ( !empty( $boxes ) ) {
		?>
		<div class="accordion">
		<?php
		$count = 1;
		foreach ( $boxes as $key => $box ) {
			if ( !empty( $box["title"] ) && !empty( $box["content"] ) ) {

				// store the title and subtitle
				$title = ( isset( $box["title"] ) ? $box["title"] : '' );
				$icon = ( isset( $box["icon"] ) ? $box["icon"] : '' );
				$color = ( isset( $box["color"] ) ? $box["color"] : 'teal' );
				$state = ( isset( $box["state"] ) ? $box["state"] : 'closed' );
				$content = ( isset( $box["content"] ) ? $box["content"] : '' );
				?>
			<a name="accordion-<?php print $count; ?>"></a>
			<div class="accordion-box<?php print ( $state == 'open' ? ' open' : '' ); ?> <?php print $color ?>">
				<div class="accordion-box-title">
					<?php if ( !empty( $icon ) ) { ?>
					<div class="accordion-box-title-icon"><img src="<?php print $icon ?>" alt="Expand <?php print $title; ?>"></div>
					<?php } ?>
					<h4><?php print $title ?></h4>
				</div>
				<div class="accordion-box-content pad">
					<?php print apply_filters('the_content', $content ); ?>
				</div>
			</div>
				<?php
				$count++;
			}
		}
		?>
		</div>
		<?php
	}
}


