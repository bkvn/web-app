/** 
 * general.js file is responsible for managing user interaction with drum pads, JavaScript dialog boxes,
 * and AJAX connection with PHP files. jQuery features are used extensively.
 * @package: web-app
 * @author: Berker Kovan <kova0058@algonquinlive.com>
 * @copyright: 2012, Berker Kovan
 *
 * @link: http://bkvn.phpfogapp.com/js/general.js
 * @version: 0.6
 *
 * @license: This file is licensed under dual permissive BSD-3/MIT licenses. Check License.txt file for
 * further information.
 */

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
	
	// Load File open or close,
	// get data attributes of load button and input field,
	// assign selected samples onto them
	
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