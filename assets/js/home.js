(function($) {
    
    "use strict";
	$('#signinLink').on('click', function(e){
		e.preventDefault();
		window.location.href = '/signin';
	});
	
	$('#toSignUp').on('click', function(e){
		e.preventDefault();
		toSignUp();
	});
	
	$('#createMyAccount').on('click', function(e){
		e.preventDefault();
		window.location.href = '/backend/secret/?first=run';
	});
	
	function toSignUp() {
		$('html,body').animate({
	        scrollTop: $('#signUpDiv').offset().top
	    }, 850);
	}
	
    
})(jQuery);