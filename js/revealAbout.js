// When the DOM is ready, initialize the scripts.
// This is for Management link on About Us - People page.
jQuery(function( $ ){
 
// Get a reference to the container.
var container = $( ".containerManagement" );
 

// Bind the link to toggle the slide.
$( ".revealManagement" ).click(
function( event ){
// Prevent the default event.
event.preventDefault();
 
// Toggle the slide based on its current
// visibility.
if (container.is( ":visible" )){
 
// Hide - slide up.
container.slideUp( 1000 );
 
} else {
 
// Show - slide down.
container.slideDown( 1000 );
 
}
}
);

 
});