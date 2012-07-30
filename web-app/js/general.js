$(document).ready(function () {
	
	$(document).keypress(function(e) {
   /* if (e.keyCode == 81 || e.keyCode == 113) { 
       audioElement.play();
    }*/
		var $pad = $('.pads[data-key="' + e.keyCode +'"]');
		 
		if ($pad.length > 0) {
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', $pad.data('audio'));
			audioElement.play();
		}
	});
	
	$('.pads').on('click', function (ev) {
		var audioElement = document.createElement('audio');
		audioElement.setAttribute('src', $(this).data('audio'));
		audioElement.play();
	});
	
	$('.loadFile').on('click', function (ev) {
		$('#loadSample:hidden').show();
	});
	
	$('#closeLoadSample').on('click', function (ev) {
		$('#loadSample:visible').hide();
	});


});