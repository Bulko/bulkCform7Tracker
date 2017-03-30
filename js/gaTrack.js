document.addEventListener( 'wpcf7mailsent', function( event )
{
    ga('send', 'event', 'Contact Form', 'submit');
}, false );