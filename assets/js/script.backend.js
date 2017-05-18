(function($) {
    
    "use strict";
    
    if (first && first == 'run') {
    	$("#firstRun-modal").modal('show');
    }
    
	$('#accountBtn').on('click', function(e){
		e.preventDefault();
		acct();
	});
	
	$('#helpBtn, #help').on('click', function(e){
		e.preventDefault();
		help();
	});
	
	$('#newChannel').on('click', function(e){
		e.preventDefault();
		newChannel();
	});
	
	$('.connectSocial').on('click', function(e){
		e.preventDefault();
		var social = $(this).data('social');
		switch(social){
			case "facebook":
				loadIt();
				self.location.href='https://www.facebook.com/v2.5/dialog/oauth?client_id=1000963483383658&amp;state=6a4c374565c994a81555ff322d50e15f&amp;response_type=code&amp;sdk=php-sdk-5.1.2&amp;redirect_uri=https%3A%2F%2Ffluxplay.io%2Fbackend%2Fsecret%2Fconnect_fb.php%3Fdo%3Dlogin%26c%3D70&amp;scope=email%2Cmanage_pages%2Cpublish_pages';
			break;
			case "youtube":
				self.location.href='connect_yt.php?c=70&amp;first=done';
			break;
			case "vimeo":
				self.location.href='connect_dm.php?c=70&amp;first=done';
			break;
			case "twitter":
				self.location.href='connect_twit.php?c=70&amp;first=done';
			break;
		}
	});
	
	$('.settings').on('click', function(e){
		e.preventDefault();
		settings('70');
		console.log('settings');
	});
	
	$('.connections').on('click', function(e){
		e.preventDefault();
		showConnect('70');
	});
	
	$('.newVideo').on('click', function(e){
		e.preventDefault();
		readyUpload('70');
	});
	
	function acct(){
		//$("#fluxplay-modal-body").load('account.php',function(){
			$('#helpForm').addClass('hidden');
			$('#channelSettingsDiv').addClass('hidden');
			$('#acctForm').removeClass('hidden');
			$("#fluxplay-modal").modal('show');
		//});
	}
	function help() {
		//$("#fluxplay-modal-body").load('help.php',function(){
			$('#channelSettingsDiv').addClass('hidden');
			$('#acctForm').addClass('hidden');
			$('#helpForm').removeClass('hidden');
			$("#fluxplay-modal").modal('show');
		//});
	}
	
	function settings(c){
		//channelt = c;
		//$("#fluxplay-modal-body").load('settings.php?c='+c,function(){
			
			$('#acctForm').addClass('hidden');
			$('#helpForm').addClass('hidden');
			$('#channelSettingsDiv').removeClass('hidden');
			$("#fluxplay-modal").modal('show');
		//})
	}
	
	function closeChat() {
		$("#fbChatShadow").fadeOut();
		$("#fbChat").fadeOut();
	}
	
	if(!window.File && window.FileReader && window.FileList && window.Blob) { //browser doesn't supports File API
	
	}
	
	//help chat
	/*
fbChatW = $("#fbChat").width();
	$("#fbChat").css('left','50%').css('margin-left','-'+fbChatW/2+'px');
	$("#fbChat").hide().css('opacity','1');
	
	tempChannelForCheck = '';
	function readyUpload(c) {
		if (tempChannelForCheck==c) {
			$("#video-modal").modal('toggle');
		} else {
			$("#video-modal-body").load('video.php?c='+c,function(){
				tempChannelForCheck = c;
				$("#video-modal").modal('toggle');
			});
		}
	}
*/
	
	$("#progressTable").css('height',$(window).height()+'px');
	$("#progressTableTD").css('height',$(window).height()+'px');
	$("#streamTable").css('height',$(window).height()+'px');
	$("#streamTableTD").css('height',$(window).height()+'px');
	//$("#uploadTable").css('left',$(window).height()+'px');
	
	function showSocialSettings(social,channel) {
		//$('#settings-modal-body').load(social + '.php?c=' + channel,function(){
			$("#settings-modal").modal('toggle');
		//});
	}
		
	$('#settings-modal').on('hidden.bs.modal', function(e) {
		$('#settings-modal-body').html('');
	});
	
	function disconnectSN(sn,c) {
		self.location.href='/backend/secret/?do=disconnect&sn='+sn+'&c='+channelt;
	}
	
	function showConnect(c) {
		$("#connect" + c).toggle('blind');
	}
	
	function newChannel() {
		if(confirm('Adding an extra channel is only for paying users, ready to purchase?')) { self.location.href='/backend/secret/pay/?f=channelUp&utm_source=app&utm_campaign=purchase&utm_medium=channelUp'; }
	}
	
	function workItBtn(btn) {
		$(btn).html('<i class="fa circle-o-notch fa-spin fa-2x" style="opacity:0.5;cursor:pointer;"></i>');
	}
		
	$("#firstRun-modal").modal('toggle');
	
	function loadIt() {
		$('body').css('cursor', 'progress');
	}
	
	//- FOR HELP FORM
	function submitThis(btn) {
	
		if ($('.required')=='') {
			alert('empty!')
		} else {
			//$(btn).button('loading');
			$.post('help.php?do=send', $("#helpForm").serialize(), function(data){
				if (data!="") {
					//give id?
					$("#fluxplay-modal").modal('hide');
					alert('Thanks, we\'ve received your help request and will be in contact shortly.');
				}
			});
		}
	}
	
	
	//- FOR ACCOUNT SETTINGS
	/*
function submitThis(btn) {
		if ($('#name').val()=='' || $('#email').val()=='' || $('#password').val()=='') {
			$("#fluxplay-modal-dialog").effect('shake');
		} else {
			//$(btn).button('loading');
			$.post('account.php?do=send', $("#acctForm").serialize(), function(data){
				if (data!="") {
					//give id?
					$("#fluxplay-modal").modal('hide');
				}
			});
		}
	}
*/
	
	$('.watermark-credits').on('click', function(){
		var btn     = $(this);
		var cost    = $(this).data('cost');
		var credits = $(this).data('credits');
		
		buyCredits(credits,cost,btn);
	});
	function buyCredits(credits,cost,btn) {
		if(confirm('Watermarking a video is only for paying users, ready to purchase?')) { self.location.href='/backend/secret/pay/?f=watermarkCredits'+credits+'&utm_source=app&utm_campaign=purchase&utm_medium=watermarkCredits'+credits; }
	}
	

	
	//- FOR CHANNEL SETTINGS
	$('#disconnectBtn').addClass('disabled');//removeAttr('data-toggle').css('opacity','0.25');
	
	function changedAPI() {
		$("#changedAPIis").val('1');
	}
	function submitThis(btn) {
		if ($('#channelName').val()=="") {
			$("#fluxplay-modal-dialog").effect('shake');
		} else {
			//$(btn).button('loading');
			$.post('settings.php?do=save', $("#settingsForm").serialize(), function(data){
				if (data=="changedAPI") {
					$("#fluxplay-modal").modal('hide');
					self.location.href='/backend/secret/?show=social&c=70';
				} else {
					$("#fluxplay-modal").modal('hide');
				}
			});
		}
	}
	
	function uploadingLogo() {
		extension = $("#logo").val().replace(/^.*\./, '');
		if (extension=='png') {
			$("#uploadLogoBtn").button('loading');
			$("#channelLogoForm").submit();
		} else {
			alert('Please upload a PNG image!');
		}
	
	}
	function doneUploadLogo() {
		$("#uploadLogoBtn").button('reset');
		//$("#logoPreview").css('background-image','').css('background-image','url(/uploads/70/logo.png?2199)');
	}
	
	function delChannel(c) {
		if(confirm('Really delete this channel?  This can not be undone!')){
			self.location.href='/backend/secret/?do=delChannel&c=70';
		}
	}

	
})(jQuery);
