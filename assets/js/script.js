(function($) {
    
    "use strict";
    
    //- Workaround for safari iOS zooming/pinching
    document.addEventListener('gesturestart', function (e) {
	    e.preventDefault();
	});
    
    var container_width  = $('#fb-message').width();
	var container_height = $('#fb-message').height();
	
    $('#fb-message').html('<div class="fb-page" data-href="https://www.facebook.com/coterieaustralia/" data-tabs="messages" data-small-header="true" data-height="'+container_height+'" data-width="'+container_width+'" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/coterieaustralia/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/coterieaustralia/">Coterie Hospitality</a></blockquote></div>');


	$(".btn-maonster").fancybox({
        width:500,
        //wrapCSS: "wow tada",
        //autoResize: false,
        //autoHeight: true,
        //autoWidth: true,
        //autoCenter: true,
        //fitToView: true,
        closeBtn: true,
        helpers: {
            overlay: {
                locked: true
            }
        },
        afterClose: function(obj) {
        	console.log(obj.href);
        	if (obj.href == "#fb-message") {
			  dataLayer.push({'event' : 'sendMeSpecsAbandoned', 'sendMeSpecsForm' : 'abandoned'});
        	}
        	else if (obj.href == "#early-popup") {
			  dataLayer.push({'event' : 'reserveMySkillionPopupAbandoned', 'reserveMySkillionPopup' : 'abandoned'});
        	}
        }
    });
    
    $(".fancybox").fancybox();
    
    $(".messenger-btn").fancybox({
		padding : 0,
        //width:500,
        //autoResize: false,
        //autoHeight: true,
        //autoWidth: true,
        //autoCenter: true,
        //fitToView: true,
        beforeLoad: function() { 
        },
        afterShow: function() {
	        var cnt    = 5;
			var height = $('.fancybox-wrap').width();
			var fancyInt;
			clearInterval(fancyInt);
			fancyInt = setInterval(function(){
				$.fancybox.update();
				$.fancybox.reposition();
				var newHeight = $('.fancybox-wrap').width();
				if (height == newHeight) {
					cnt--;
					if (cnt <= 0) {
						clearInterval(fancyInt);
					}
				}
			}, 1000);
			
	        FB.XFBML.parse(document.getElementById('#fb-message'),function(){
				$.fancybox.update();
		        $.fancybox.reposition();
		        console.log('test');
	        });
        },
        afterLoad: function() { 
	        /* this.title = '<img class="avatar" src="images/Kenneth.png" alt="Kenneth" /><div class="avatar-title">I\'m Aidan. Let\'s talk today!</div>'; */
	        
	    },
        helpers: {
        	title: {
	            type: 'inside',
	            position: 'top'
	        },
            overlay: {
                locked: false
            }
        }
    });
    
	$('.maonster-name').bind('keydown', function (event) {
    	var regex = new RegExp("^[a-zA-Z -]+$");
        var key = (!event.charCode) ? event.which : event.charCode;
        var keyToString = String.fromCharCode(key);
        
        //console.log(key);
        //console.log(keyToString);
        //console.log(regex.test(keyToString));
		if (!regex.test(keyToString)) {
        	switch (key) {
	            case 8:  // Backspace
	            case 9:  // Tab
	            case 13: // Enter
	            case 37: // Left
	            case 38: // Up
	            case 39: // Right
	            case 40: // Down
	            case 46: // Delete
	            case 189: // Dash and Underscore
	            case 190: // Dot
	            break;
	
	            default:
	            	event.preventDefault();
					return false;
			}
		}
    });
    
    if (jQuery.browser.mobile) {
	    $('.maonster-number, .maonster-phone').bind('keypress', function (event) {
	        var regex = new RegExp("^[0-9]+$");
	        var key = (!event.charCode) ? event.which : event.charCode;
	        var keyToString = String.fromCharCode(key);
	        
			if (!regex.test(keyToString)) {
	        	event.preventDefault();
				return false;
			}
	    });
    }
    else {
	    $('.maonster-number, .maonster-phone').bind('keydown', function (event) {
	        var regex = new RegExp("^[0-9]+$");
	        var key = (!event.charCode) ? event.which : event.charCode;
	        var keyToString = String.fromCharCode(key);
	        
			if (!regex.test(keyToString)) {
	        	switch (key) {
		            case 8:  // Backspace
		            case 9:  // Tab
		            case 13: // Enter
		            case 37: // Left
		            case 38: // Up
		            case 39: // Right
		            case 40: // Down
		            case 46: // Delete
		            //case 189: // Dash and Underscore
		            case 190: // Dot
		            break;
		
		            default:
		            	event.preventDefault();
			            //$(this).removeClass("valid");
			            //$(this).addClass('error');
						return false;
				}
			}
			else if ( event.shiftKey|| (event.keyCode < 48 || event.keyCode > 57) && 
					 (event.keyCode < 96 || event.keyCode > 105 ) ) {
	        	event.preventDefault();
				return false;
			}
	    });
    }
    
    if (jQuery.browser.mobile) {
	    $('.maonster-email').bind('keypress', function (event) {
	        var regex = new RegExp("^[a-zA-Z0-9 @._-]+$");
	        var key = (!event.charCode) ? event.which : event.charCode;
	        var keyToString = String.fromCharCode(key);
	        
			if (!regex.test(keyToString)) {
				
	        	event.preventDefault();
				return false;
			}
	    });
    }
    else {
	    $('.maonster-email').bind('keydown', function (event) {
	    	var regex = new RegExp("^[a-zA-Z0-9 @._-]+$");
	        var key = (!event.charCode) ? event.which : event.charCode;
	        var keyToString = String.fromCharCode(key);
	        
			var c = event.which;
			//console.log(c);
			var _to_ascii = {
		        '188': '44',
		        '109': '45',
		        '190': '46',
		        '191': '47',
		        '192': '96',
		        '220': '92',
		        '222': '39',
		        '221': '93',
		        '219': '91',
		        '173': '45',
		        '187': '61', //IE Key codes
		        '186': '59', //IE Key codes
		        '189': '45'  //IE Key codes
		    }
		
		    var shiftUps = {
		    	"190": ">",
		    	"111": "/",
		    	"107": "+",
		    	"106": "*",
		        "96": "~",
		        "49": "!",
		        "50": "@",
		        "51": "#",
		        "52": "$",
		        "53": "%",
		        "54": "^",
		        "55": "&",
		        "56": "*",
		        "57": "(",
		        "48": ")",
		        "45": "_",
		        "61": "+",
		        "91": "{",
		        "93": "}",
		        "92": "|",
		        "59": ":",
		        "39": "\"",
		        "44": "<",
		        "46": ">",
		        "47": "?"
		    };
		    
		    if (_to_ascii.hasOwnProperty(c)) {
	            c = _to_ascii[c];
	        }
	        
	        if (!event.shiftKey && (c >= 65 && c <= 90)) {
	        	//console.log('if');
	            c = String.fromCharCode(c + 32);
	            
		        if (!regex.test(c)) {
		        	event.preventDefault();
					return false;
				}
	        } else if (event.shiftKey && shiftUps.hasOwnProperty(c)) {
	        	//console.log('else if');
	            c = shiftUps[c];
	            
		        if (!regex.test(c)) {
		        	event.preventDefault();
					return false;
				}
	        } else {
	        	//console.log('else');
	        	switch (c) {
	            case 8:  // Backspace
	            case 9:  // Tab
	            case 13: // Enter
	            case 37: // Left
	            case 38: // Up
	            case 39: // Right
	            case 40: // Down
	            case 46: // Delete
	            case 50: // @
	            case 189: // Dash and Underscore
	            case 190: // Dot
	            break;
	
		            default:
		            	c = String.fromCharCode(c);
		            	if (!regex.test(c)) {
				        	event.preventDefault();
							return false;
						}
				}
	            
	        }
	    });
    }
    
    if (jQuery.browser.mobile) {
	    $('.maonster-alphanum').bind('keypress', function (event) {
	        var regex = new RegExp("^[a-zA-Z0-9 ]+$");
	        var key = (!event.charCode) ? event.which : event.charCode;
	        var keyToString = String.fromCharCode(key);
	        
			if (!regex.test(keyToString)) {
				
	        	event.preventDefault();
				return false;
			}
	    });
    }
    else {
	    $('.maonster-alphanum').bind('keydown', function (event) {
	    	var regex = new RegExp("^[a-zA-Z0-9 ]+$");
	        var key = (!event.charCode) ? event.which : event.charCode;
	        var keyToString = String.fromCharCode(key);
	        
			var c = event.which;
			//console.log(c);
			var _to_ascii = {
		        '188': '44',
		        '109': '45',
		        '190': '46',
		        '191': '47',
		        '192': '96',
		        '220': '92',
		        '222': '39',
		        '221': '93',
		        '219': '91',
		        '173': '45',
		        '187': '61', //IE Key codes
		        '186': '59', //IE Key codes
		        '189': '45'  //IE Key codes
		    }
		
		    var shiftUps = {
		    	"190": ">",
		    	"111": "/",
		    	"107": "+",
		    	"106": "*",
		        "96": "~",
		        "49": "!",
		        "50": "@",
		        "51": "#",
		        "52": "$",
		        "53": "%",
		        "54": "^",
		        "55": "&",
		        "56": "*",
		        "57": "(",
		        "48": ")",
		        "45": "_",
		        "61": "+",
		        "91": "{",
		        "93": "}",
		        "92": "|",
		        "59": ":",
		        "39": "\"",
		        "44": "<",
		        "46": ">",
		        "47": "?"
		    };
		    
		    if (_to_ascii.hasOwnProperty(c)) {
	            c = _to_ascii[c];
	        }
	        
	        if (!event.shiftKey && (c >= 65 && c <= 90)) {
	        	//console.log('if');
	            c = String.fromCharCode(c + 32);
	            
		        if (!regex.test(c)) {
		        	event.preventDefault();
					return false;
				}
	        } else if (event.shiftKey && shiftUps.hasOwnProperty(c)) {
	        	//console.log('else if');
	            c = shiftUps[c];
	            
		        if (!regex.test(c)) {
		        	event.preventDefault();
					return false;
				}
	        } else {
	        	//console.log('else');
	        	switch (c) {
	            case 8:  // Backspace
	            case 9:  // Tab
	            case 13: // Enter
	            case 37: // Left
	            case 38: // Up
	            case 39: // Right
	            case 40: // Down
	            case 46: // Delete
	            //case 50: // @
	            //case 189: // Dash and Underscore
	            //case 190: // Dot
	            break;
	
		            default:
		            	c = String.fromCharCode(c);
		            	if (!regex.test(c)) {
				        	event.preventDefault();
							return false;
						}
				}
	            
	        }
	    });
    }
	
	//- Helpers
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function isName(name) {
        var regex = /^[a-zA-Z -]+$/;
        return regex.test(name);
    }

    function isPhone(phone) {
        var regex = /^[0-9 -]+$/;
        return regex.test(phone);
    }
    
    function isAlphaNum(name) {
        var regex = /^[a-zA-Z0-9 ]+$/;
        return regex.test(name);
    }
    
    function isFile(el) {
        var f = $(el)[0].files[0];
		var s = f.size;
		var t = f.type;
		
		if ( s > 1000000 ) {
			return false;
        }
        
        if ($(el).hasClass('maonster-doc')) {
	        if (t.split('/')[1] != 'pdf' && t.split('/')[1] != 'doc' && t.split('/')[1] != 'docx' && t.split('/')[1] != 'xls') {
	        	return false;
	        }
        }
        else if ($(el).hasClass('maonster-image')) {
	        if (t.split('/')[1] != 'jpg' && t.split('/')[1] != 'jpeg' && t.split('/')[1] != 'png') {
	        	return false;
	        }
        }
        
        return true;
    }
    
    function validateForm (form) {
		var requireds = $(form).find('.required');
		var reqTotal  = requireds.length;
		var validCnt  = 0;
		
		$(requireds).each(function(){
			if ($(this).val() != '') {
				
				if ($(this).hasClass('maonster-name')) {
					if (isName($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-email')) {
					if (isEmail($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-phone')) {
					if ($(this).intlTelInput("isValidNumber")) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-number')) {
					if (isPhone($(this).val())) {
						if ($(this).attr('id') == 'stripeCC') {
							if ($(this).val().length >= 12) {
								$(this).parent().removeClass('has-error').addClass('has-success');
							}
							else {
								$(this).parent().removeClass('has-success').addClass('has-error');
							}
						}
						else {
							$(this).parent().removeClass('has-error').addClass('has-success');
						}
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-alphanum')) {
					if (isAlphaNum($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-username')) {
					if (isUsername($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-password')) {
					if ($(this).val().length >= 8) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-address')) {
					$(this).parent().removeClass('has-error').addClass('has-success');
					validCnt++;
				}
				else if ($(this).hasClass('maonster-url')) {
					if (isURL($(this).val())) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).hasClass('maonster-social-url')) {
					if (isSocialURL($(this).val(),$(this).data('social'))) {
						$(this).parent().removeClass('has-error').addClass('has-success');
						validCnt++;
					}
					else {
						$(this).parent().removeClass('has-success').addClass('has-error');
					}
				}
				else if ($(this).is('input[type="file"]')) {
					var input 		= $(this);
					var isMultiple 	= $(input).prop('multiple');
					var filesTotal  = 0;
					if ( $(input)[0].files.length > 0 ) {
						if (isMultiple) {
							$.each($(input)[0].files, function(i, file) {
							    
								if(isFile(input,file)){
									filesTotal++;
								}
								
								if ($(input)[0].files.length == filesTotal) {
									validCnt++;
								}
								
							});
						}
						else {
							if(isFile(input,$(input)[0].files[0])){
								validCnt++;
							}
						}
					}
				}
				else {
					if (!$(this).hasClass('maonster-checkbox') && !$(this).hasClass('maonster-radio')) {
						$(this).parent().removeClass('has-error').addClass('has-success');
					}
					validCnt++;
				}
				
			}
			else {
				if ($(this).is('input[type="file"]')) {
					$(this).parent().parent().find('span.fileinput-filename').removeClass('text-success').addClass('text-danger');
				}
				else if (!$(this).hasClass('maonster-checkbox') && !$(this).hasClass('maonster-radio')) {
					$(this).parent().removeClass('has-success').addClass('has-error');
				}
			}
		});
		
		
		if (reqTotal == validCnt) {
		    $(form).find('.submit').prop('disabled', false);
			$(form).find('.submit').removeClass("disabled");
		    $(form).find('.submit').addClass('btn-success');
		}
		else {
		    $(form).find('.submit').prop('disabled', true);
		    $(form).find('.submit').removeClass('btn-success');
			$(form).find('.submit').addClass("disabled");
		}
		
	}
	
	$('form').each(function(){
		var form     = $(this);
		var required = $(form).find('.required');
		if (required.length > 0) {
			validateForm($(form));
			$(required).bind('keyup blur change', function(){
				validateForm($(form));
			});
		}
	});
    

})(jQuery);