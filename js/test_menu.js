//alert('It is working');

//var myNavBtn = document.getElementById('#cssmenu');
//$( "#myDiv" ).css( "border", "3px solid red" );

jQuery(function() {
  jQuery('#cssmenu > ul > li > a').each(function() {
    if (jQuery(this).attr('href')  ===  window.location.pathname) {
      jQuery(this).addClass('current');
    }
  });
});  

