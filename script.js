$(document).ready(function(){
	$('#autowidth').lightslider({

		autowidth:true,
		loop:true,
		onSliderload: function(){
			$('#autowidth').removeClass('cS-hidden');
		}
	});
});