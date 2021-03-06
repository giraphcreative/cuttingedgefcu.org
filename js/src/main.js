

// onload responsive footer and menu stuff
jQuery(document).ready(function($){

	// select some things we'll use to make things responsive
	var menu = $( 'header nav' ),
		menu_toggle = menu.find( 'button.menu-toggle' ),
		menu_ul = menu.find( '.nav-menu' ),
		fluid_images = $( '.content-area img, .site-content img' );


	// function to set the sidebar height
	var set_sidebar_height = function(){
		if ( matchMedia('only screen and (min-width: 768px)').matches && $('.three-quarter').height() > $('.sidebar').height() ) {
			$( '.sidebar' ).height( $('.three-quarter').height() + 50 );
		} else {
			$( '.sidebar' ).height( 'auto' );
		}
	};


	// remove height and width from images inside
	fluid_images.removeAttr( 'width' ).removeAttr( 'height' );


	// show/hide menus when they click the toggler
	menu_toggle.click(function(){

		if ( menu_ul.is( ':visible' ) ) {
			menu_ul.hide();
		} else {
			menu_ul.show();
		}

		// when user clicks a link, open submenu if it exists.
		menu_ul.find( 'a' ).click(function(){
			var parent_li = $( this ).parent( 'li' );
			var submenu = $( this ).next( 'ul' );
			if ( !submenu.is( ':visible' ) && parent_li.hasClass( 'menu-item-has-children' ) ) {
				event.preventDefault();
				parent_li.addClass( 'open' );
				submenu.show();
			}
		});

	});


	// do third-party link confirm dialog
	$( '.content a:not(.previous):not(.next):not(.lightbox-iframe), a.off-site' ).click(function( e ){
		
		// break the normal linking behavior
		e.preventDefault();

		// get the link
		var the_link = $( this );
		var the_link_href = the_link.attr( 'href' );

		// prompt the user and if they confirm the prompt, proceed to the third party site.
		if ( the_link.hasClass( 'bypass' ) ||
			the_link_href.match( /cuttingedgefcu.test/i ) || 
			the_link_href.match( /cuttingedgefcu.org/i ) || 
			the_link_href.match( /loanliner.com/i ) || 
			the_link_href.match( /ce.giraph.io/i ) || 
			the_link_href.charAt(0) === '#' || 
			the_link_href.charAt(0) === '/' ) {
			location.href = the_link_href;
		} else {
			if ( confirm( "This link is taking you to a third party provider - are you sure you want to proceed?" ) ) {
				window.open( the_link_href, "_blank" );
			}
		}

	});


	// if we have a button with a 'data-url' attribute, use the property to make the button link.
	$( 'button[data-url]' ).click(function(){
		window.location.href = $( this ).attr( 'data-url' );
	});

	
	// resize the sidebar on load and when the window is resized.
	setTimeout( function(){
		set_sidebar_height();
	}, 1000 );
	$(window).resize( set_sidebar_height );


	// let's do some scrolly scrolly magic with the menus, shall we?!
	var menu_offset = $('.container-main-menu').offset();
	
	// update the menu offset variable on window resize
	$(window).resize(function(){
		menu_offset = $('.container-main-menu').offset();
	});

	// when we scroll
	$(window).scroll(function(){

		// set up a variable for the offset
		var voffset = menu_offset.top;

		// if we have an 'admin-bar' class on the body. 
		if ( $('body').hasClass('admin-bar') ) {
			voffset = menu_offset.top - 32;
		}

		// if the menu is horizontal and we're scrolled past the top of the menu
		if ( $(window).width() > 900 && $(window).scrollTop() > voffset ) {

			// add the scrolled class
			$('.container-main-menu').addClass( 'scrolled' );
			$('body').addClass( 'fixed-menu' );
			
		} else {

			// or remove it if we're above the menu position on the page
			$('.container-main-menu').removeClass( 'scrolled' );
			$('body').removeClass( 'fixed-menu' );

		}
	});

});

/*
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-38315794-50', 'auto');
ga('send', 'pageview');
*/
