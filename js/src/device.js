

// onload user agent sniffing for app links.
jQuery(document).ready(function($){

	// quick mobile detect
	var userAgent = navigator.userAgent || navigator.vendor || window.opera;
    if (/windows phone/i.test(userAgent)) $('html').addClass("win-phone");
    if (/android/i.test(userAgent)) $('html').addClass("android");
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) $('html').addClass("ios");


	// if we're on iOS, and the app bar isn't hidden (cookie check)
	if ( $( 'html' ).hasClass( 'ios' ) && !$.cookies.get( 'hide-app-bar' ) ) {
		
		// show the ios app bar
		$( '.app-bar.ios' ).show();
	}

	// if we're on Android, and the app bar isn't hidden (cookie check)
	if ( $( 'html' ).hasClass( 'android' ) && !$.cookies.get( 'hide-app-bar' ) ) {

		// show the android app bar.
		$( '.app-bar.android' ).show();
	}

	// when someone clicks the close 'X' on the app bar
	$( '.app-bar .close' ).on( 'click', function(){

		// hide the bar itself.
		$( this ).parent( '.app-bar' ).hide();

		// set a cookie to prevent it from showing for 14 days
		$.cookies.set('hide-app-bar', 'true', { expires: 14 });

	});

});

