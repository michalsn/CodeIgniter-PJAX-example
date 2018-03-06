$(function () {

	if ($.support.pjax) {
		
		console.log('pjax active')
		
		$(document).pjax('a', '#pjax-container')

	}

});