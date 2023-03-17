<?php


function the_promo() {

	// get the slides
	if ( has_cmb_value( 'promo-image' ) ) {
		?>
		<div class="promo-image">
			<?php if ( has_cmb_value( 'promo-link' ) ) { ?><a href="<?php show_cmb_value( 'promo-link' ); ?>"><?php } ?>
				<img src="<?php show_cmb_value( 'promo-image' ) ?>" alt="<?php show_cmb_value( 'promo-alt' ); ?>">
			<?php if ( has_cmb_value( 'promo-link' ) ) { ?></a><?php } ?>
		</div>
		<?php
	}
	
}

