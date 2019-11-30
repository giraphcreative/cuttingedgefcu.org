

// onload responsive footer and menu stuff
jQuery(document).ready(function($){

	$( '.accordion-box-title' ).click(function(){
		$( this ).parent( '.accordion-box' ).children( '.accordion-box-content' ).slideToggle( 600 );
	});

});

