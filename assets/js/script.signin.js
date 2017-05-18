(function($) {
    
    "use strict";
	$('#login').on('click', function(e){
		e.preventDefault();
		window.location.href = '/backend/secret/';
	});
	
})(jQuery);