<?php


function mobile_bars() {

	// grab the links
	$ios_content = pure_get_option( 'ios-content' );
	$ios_link = pure_get_option( 'ios-link' );
	$android_content = pure_get_option( 'android-content' );
	$android_link = pure_get_option( 'android-link' );

	// if the ios link exists
	if ( !empty( $ios_link ) ) {
		?>
<div class="app-bar ios">
	<?php print $ios_content ?> <a href="<?php print $ios_link ?>" class="install">Install &raquo;</a> <a class='close'>X</a>
</div>
		<?php 
	}

	// if the android link is set
	if ( !empty( $android_link ) ) {
		?>
<div class="app-bar android">
	<?php print $android_content ?> <a href="<?php print $android_link ?>" class="install">Install &raquo;</a> <a class='close'>X</a>
</div>
		<?php
	}

}

