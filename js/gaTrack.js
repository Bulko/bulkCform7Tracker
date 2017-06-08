// removed to fix yoast update
if ( typeof __gaTracker == 'function' )
{
	__gaTracker( function() {
		window.ga = __gaTracker;
	});
}

document.addEventListener( 'wpcf7mailsent', function( event )
{
	ga('send', 'event', 'contact-form', 'submit');
}, false );
