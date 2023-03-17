<?php


// icon showcase
function the_icon_showcase() {

	$icons = get_cmb_value( 'icon_showcase' );

	if ( !empty( $icons ) ) {
		foreach ( $icons as $icon ) {
			if ( !empty( $icon['link'] ) && !empty( $icon['image'] ) ) { ?>
			<a href="<?php print $icon['link']; ?>">
				<div class="third icon <?php print $icon['color'] ?>">
					<img src="<?php print $icon['image']; ?>" alt="Icon for: <?php print $icon['title']; ?>">
					<?php if ( !empty( $icon['alt-text'] ) ) { ?><div class="super-title"><?php  print $icon['alt-text']; ?></div><?php } ?>
					<?php if ( !empty( $icon['title'] ) ) { ?><h5><?php print $icon['title']; ?></h5><?php } ?>
				</div>
			</a>
				<?php 
			}
		}
	}

}

