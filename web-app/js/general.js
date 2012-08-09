$(document).ready(function () {
	
	var padToLoad = null;
	var fieldToFill = null;
	
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
	
	$('.pads').each(function (ev) {
		$(this)
	})
	
	$('.pads').on('click', function (ev) {
		var audioElement = document.createElement('audio');
		audioElement.setAttribute('src', $(this).data('audio'));
		audioElement.play();
	});
	
	// Load File open or close
	
	$('.loadFile').on('click', function (ev) {
		$('#loadSample:hidden').show();
		padToLoad = $(this).data('pad');
		fieldToFill = $(this).data('field');
	});
	
	$('#closeLoadSample').on('click', function (ev) {
		var audio = $('[name="radioSelect"]:checked').data('audio');
		$('#loadSample:visible').hide();
		$('#' + padToLoad).data('audio', audio);
		$('#' + fieldToFill).val(audio);
	});
	
	// Save Kit open or close
	
	$('#saveKit').on('click', function (ev) {
		$('#saveKitBox:hidden').show();
	});
	
	$('#closeSaveKit').on('click', function (ev) {
		$('#saveKitBox:visible').hide();
	});
	
	// Load Kit open or close
	
	$('#loadKit').on('click', function (ev) {
		$('#loadKitBox:hidden').show();
	});
	
	$('#closeLoadKit').on('click', function (ev) {
		$('#loadKitBox:visible').hide();
	});
	
	// Registration open or close
	
	$('#registerAccount').on('click', function (ev) {
		$('#registrationBox:hidden').show();
	});
	
	$('#closeRegistrationBox').on('click', function (ev) {
		$('#registrationBox:visible').hide();
	});
	
	// User Login open or close
	
	$('#userLogin').on('click', function (ev) {
		$('#loginBox:hidden').show();
	});
	
	$('#closeLoginBox').on('click', function (ev) {
		$('#loginBox:visible').hide();
	});

});