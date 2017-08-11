jQuery(window).resize(nsAdjustLayout);

function nsAdjustLayout(){
   jQuery('#ns-wcapb-container').css({
	   position:'absolute',
	   left: (jQuery(window).width() - jQuery('#ns-wcapb-container').outerWidth())/2,
	   top: (jQuery(window).height() - jQuery('#ns-wcapb-container').outerHeight())/2
   });

}

jQuery(document).ready(function( $ ) {
	
	nsAdjustLayout();
	
	// $('#ns-custom-layer-box').delay(2000).fadeIn();
	// $('#ns-wcapb-container').delay(2000).fadeIn();
	
	$('#ns-custom-layer-box').click(function() {
		$('#ns-custom-layer-box').fadeOut();
		$('#ns-wcapb-container').fadeOut();
	});
	$('#ns-wcapb-container').click(function() {
		
	});

});
