__gaTracker( function() {
	window.ga = __gaTracker;
});

document.addEventListener( 'wpcf7mailsent', function( event )
{
	ga('send', 'event', 'contact-form', 'submit');
}, false );
