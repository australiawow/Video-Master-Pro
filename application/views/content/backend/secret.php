<div id="firstRun-modal" class="modal fade" tabindex="-1" role="dialog" style="display: block; padding-left: 0px;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Welcome to FLUX Play</h4>
      </div>
      <div id="video-modal-body" class="modal-body">
		<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ffluxplay.io%2Fvideos%2F215559828901483%2F&amp;show_text=0&amp;width=560" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true"></iframe>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Start using FLUX Play</button>
      </div>
    </div>
  </div>
</div>

<div id="video-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">New Video</h4>
      </div>
      <div id="video-modal-body" class="modal-body">
      </div>
    </div>
  </div>
</div>

<div id="fluxplay-modal" class="modal fade" tabindex="-1" role="dialog">
  <div id="fluxplay-modal-dialog" class="modal-dialog" role="document">
    <div id="fluxplay-modal-body" class="modal-content">
		
		<!-- CHANNEL SETTINGS -->
		
		<div id="channelSettingsDiv" class="hidden">
			<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
		        <h4 class="modal-title" id="fluxplay-modal-title">Channel Settings</h4>
		    </div>
		    <div class="modal-body">
      

			 <form class="form-horizontal" id="settingsForm">
			  <div class="form-group">
			    <label for="channelName" class="col-sm-12">Channel Name</label>
			    <div class="col-sm-12">
			      <input type="text" class="form-control" id="channelName" name="name" placeholder="Channel Name" value="Your Channel">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="channelName" class="col-sm-12">Channel Logo</label>
			    <div class="col-sm-10">
					<button id="uploadLogoBtn" type="button" class="btn btn-default" style="width:100%;" onclick="$('#logo').click();" data-loading-text="<i class='fa fa-circle-o-notch fa-spin' style='padding:3px 0;'></i> Uploading"><i class="fa fa-cloud-upload"></i> Upload My Logo</button>
			    </div>
				<div class="col-sm-2">
					<!-- <div id="logoPreview" style="width:100%;height:34px;background:center center no-repeat;background-size:cover;background-image:url(/uploads/70/logo.png?7375);"></div> -->
				</div>
			  </div>
			  
				<hr>
				
			  <div style="margin-bottom:20px;"><strong>Add your own App IDs for each Social Network here</strong>. <a href="/help/api/" target="_blank">Need a little help?</a><br>
				<span style="font-size:12px;line-height:120%;">Note: Adding/Modifying the below settings will reset your Social Network connections, requiring you to re-connect your channel.</span><br>
			  </div>
			  
			  <div class="form-group">
			    <label for="fb_key" class="col-sm-6">Facebook App ID</label>
			    <label for="fb_secret" class="col-sm-6">Facebook App Secret</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" id="fb_key" name="fb_key" placeholder="Facebook App ID" value="" onchange="changedAPI();">
			    </div>
			    <div class="col-sm-6">
			      <input type="password" class="form-control" id="fb_secret" name="fb_secret" placeholder="Facebook App Secret" value="" onchange="changedAPI();">
			    </div>
			  </div>
			
			  <div class="form-group">
			    <label for="yt_key" class="col-sm-6">YouTube Client ID</label>
			    <label for="yt_secret" class="col-sm-6">YouTube Client Secret</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" id="yt_key" name="yt_key" placeholder="YouTube Client ID" value="" onchange="changedAPI();">
			    </div>
			    <div class="col-sm-6">
			      <input type="password" class="form-control" id="yt_secret" name="yt_secret" placeholder="YouTube Client Secret" value="" onchange="changedAPI();">
			    </div>
			  </div>
			
			  <div class="form-group">
			    <label for="dm_key" class="col-sm-6">Daily Motion API Key</label>
			    <label for="dm_secret" class="col-sm-6">Daily Motion API Secret</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" id="dm_key" name="dm_key" placeholder="Daily Motion API Key" value="" onchange="changedAPI();">
			    </div>
			    <div class="col-sm-6">
			      <input type="password" class="form-control" id="dm_secret" name="dm_secret" placeholder="Daily Motion API Secret" value="" onchange="changedAPI();">
			    </div>
			  </div>
			
			  <div class="form-group">
			    <label for="twit_key" class="col-sm-6">Twitter Consumer Key</label>
			    <label for="twit_secret" class="col-sm-6">Twitter Consumer Key</label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" id="twit_key" name="twit_key" placeholder="Twitter Consumer Key" value="" onchange="changedAPI();">
			    </div>
			    <div class="col-sm-6">
			      <input type="password" class="form-control" id="twit_secret" name="twit_secret" placeholder="Twitter Consumer Key" value="" onchange="changedAPI();">
			    </div>
			  </div>
			
			  <input type="hidden" name="id" value="70">
			  <input type="hidden" name="api_id" value="35">
			  <input type="hidden" name="changedAPIis" id="changedAPIis" value="0">
			</form>
			
			<div style="width:0;height:0;overflow:hidden;">
				<form id="channelLogoForm" action="settings.php?do=channelLogo" method="post" enctype="multipart/form-data" target="logoWin" style="display:none;margin:0;">
					<input type="file" name="logo" id="logo" onchange="uploadingLogo();">
					<input type="hidden" name="c" value="70">
				</form>
			
				<iframe name="logoWin" width="0" height="0" frameborder="0"></iframe>
			</div>
				  
			</div>
		    <div class="modal-footer">
       
				<div id="disconnect" style="float:left;padding-top:6px;">
				<div class="btn btn-danger btn-xs" onclick="delChannel('70');"><i class="fa fa-trash-o"></i> Delete Channel</div>
				<div class="btn-group btn-group-xs dropup">
				  <button id="disconnectBtn" type="button" class="btn btn-default dropdown-toggle disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  <i class="fa fa-close"></i> Disconnect Social Networks
		 		 </button>
		 		 <ul class="dropdown-menu">
				   		   		   		    		 </ul>
				</div>
				</div>
		       
		       	<div>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button id="fluxplay-modal-button" type="button" class="btn btn-primary" onclick="submitThis(this);">Save</button>
				</div>
		     
		      </div>
		    
		</div>
		
		<!-- HELP FORM -->
		
		<form class="form-horizontal hidden" id="helpForm" _lpchecked="1">
	
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	        <h4 class="modal-title" id="fluxplay-modal-title">Get Help</h4>
	      </div>
		  <div class="modal-body">
			  <div class="form-group">
			    <label for="email" class="col-sm-12">Email</label>
			    <div class="col-sm-12">
			      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="test2@test.com">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="email" class="col-sm-12">Message</label>
			    <div class="col-sm-12">
			      <textarea class="form-control" name="message" rows="5" placeholder="Describe the problem you're having in as much detail as possible!"></textarea>
			    </div>
			  </div>
		   </div>
		   <div class="modal-footer">
		      <div id="pay" style="display:none;"></div>
		
		       	<div>
		        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button id="fluxplay-modal-button" type="button" class="btn btn-primary" onclick="submitThis(this);">Submit Help Request</button>
				</div>
		     
		    </div>
		
		</form>
		
		
		<!-- ACCOUNT SETTINGS -->
		<form class="form-horizontal" id="acctForm">

			
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			        <h4 class="modal-title" id="fluxplay-modal-title">Account Settings</h4>
			      </div>
			      <div class="modal-body">
			
			   
			  <div class="form-group">
			    <label for="name" class="col-sm-12">Full Name</label>
			    <div class="col-sm-12">
			      <input type="email" class="form-control" id="name" name="name" placeholder="Full Name" value="" autocomplete="off" >
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="email" class="col-sm-12">Email</label>
			    <div class="col-sm-12">
			      <input type="email" class="form-control" id="email" name="email" value="test2@test.com" autocomplete="off" >
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="password" class="col-sm-12">Password</label>
			    <div class="col-sm-12">
			      <input type="password" class="form-control" id="password" name="password" value="tz3gbRl6" autocomplete="off" >
			    </div>
			  </div>
			
				<hr>
				
			  <div class="form-group">
			  <label for="channelName" class="col-sm-12">Watermark Credits - <span id="currentCredits">25.00</span></label>
			    <div class="col-sm-4">
					<button data-credits="500" data-cost="30" type="button" class="watermark-credits btn btn-default" style="width:100%;" data-loading-text="<i class='fa fa-circle-o-notch fa-spin' style='padding:3px 0;'></i>">500 Credits - $30</button>
			    </div>
			    <div class="col-sm-4" align="center">
					<button data-credits="2,500" data-cost="120" type="button" class="watermark-credits btn btn-success" style="width:100%;" data-loading-text="<i class='fa fa-circle-o-notch fa-spin' style='padding:3px 0;'></i>">2,500 Credits - $120</button><br>
					<i style="font-size:12px;opacity:0.75;">The Most Popular!</i>
			    </div>
			    <div class="col-sm-4">
					<button data-credits="10,000" data-cost="450" type="button" class="watermark-credits btn btn-default" style="width:100%;" data-loading-text="<i class='fa fa-circle-o-notch fa-spin' style='padding:3px 0;'></i>">10,000 Credits - $450</button>
			    </div>
			  </div>
			
				<hr style="margin-bottom:5px;">
			
			<div class="alert alert-info" role="alert" align="center">
			<strong style="font-size:18px;">Join the FLUX Play Affiliate Program</strong><br>
			Earn 15% commission for every signup that leads to a purchase!<br>
			This is your custom URL, link to it to ensure you receive your commission:<br>
			<strong>https://fluxplay.io/affiliate/2838023a778dfaecdc212708f721b788</strong><br>
			<div style="opacity:0.75;font-size:12px;padding-top:12px;">
			Some T&amp;Cs: We'll remember your link for 45 days.<br>
			We pay out after accumulating $300 in commission, via PayPal.
			</div>
			</div>
			
			
				  </div>
			      <div class="modal-footer">
			              <div id="pay" style="display:none;"></div>
			
			       	<div>
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button id="fluxplay-modal-button" type="button" class="btn btn-primary" onclick="submitThis(this);">Save</button>
					</div>
			     
			      </div>
			
			</form>

	</div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<div id="linkShadow" onclick="closeLink();"></div>
<div id="link"></div>

<table id="progressTable" width="100%" height="100%">
	<tbody>
		<tr>
			<td id="progressTableTD" valign="middle" align="center">
				<div class="progressTableInner" align="center">
					<div class="progressTableHeader">Uploading your video now</div>
					<div class="progress" id="progress">
						<div class="progress-bar progress-bar-success progress-bar-striped bar active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
					</div>
					<div class="progressTableFooter">Don't close this window!</div>
				</div>
			</td>
		</tr>
	</tbody>
</table>

<table id="streamTable" width="100%" height="100%">
	<tbody>
		<tr>
			<td id="streamTableTD" valign="middle" align="center">
				<div class="streamTableInner">

					<table id="zenDone" width="100%" border="0" style="display:none;">
						<tbody>
							<tr>
								<td>
									<div style="opacity:0.85;">
										<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Processing your video<br>
										<span style="font-size:18px;">You can close this window now.</span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<button type="button" class="btn btn-success btn-lg" onclick="allDoneDo();">All Done!</button>
								</td>
							</tr>
						</tbody>
					</table>

					<table id="streamTableSocial" width="100%" border="0">
						<tbody>
							<tr id="stream_tr_FB" style="display:none;">
								<td>
									<div id="sendingFB" style="opacity:0.85;">
										<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Sending to Facebook
									</div>
									<div id="sentFB" style="display:none;">
										<i class="fa fa-check fa-fw" style="color:greenyellow;"></i> Sent to Facebook
									</div>
								</td>
							</tr>
							<tr id="stream_tr_YT" style="display:none;">
								<td>
									<div id="sendingYT" style="opacity:0.85;">
										<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Sending to YouTube
									</div>
									<div id="sentYT" style="display:none;">
										<i class="fa fa-check fa-fw" style="color:greenyellow;"></i> Sent to YouTube
									</div>
								</td>
							</tr>
							<tr id="stream_tr_DM" style="display:none;">
								<td>
									<div id="sendingDM" style="opacity:0.85;">
										<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Sending to Daily Motion
									</div>
									<div id="sentDM" style="display:none;">
										<i class="fa fa-check fa-fw" style="color:greenyellow;"></i> Sent to Daily Motion
									</div>
								</td>
							</tr>
							<tr id="stream_tr_TWIT" style="display:none;">
								<td>
									<div id="sendingTWIT" style="opacity:0.85;">
										<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Sending to Twitter
										</div>
									<div id="sentTWIT" style="display:none;">
										<i class="fa fa-check fa-fw" style="color:greenyellow;"></i> Sent to Twitter
									</div>
								</td>
							</tr>
							<tr>
								<td style="font-size:26px;font-weight:300;height:37px;" valign="middle">
									<div>
										<button id="allDoneThanks" style="display:none;" type="button" class="btn btn-success btn-lg" onclick="allDoneDo();">All Done!</button>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</td>
		</tr>
	</tbody>
</table>

<div id="videoShadow"></div>

<div align="center">
	<div class="backend-header">
		<div class="pull-left">
	
			<div style="font-family:'ff-kava-web-pro';font-size:62px;">
			<img src="<?php echo assets_url(); ?>images/fluxPlay.png" height="80" style="float:left;">
			</div>
	
		</div>
		<div align="right" class="pull-right nav-account">
		
			<div class="btn-group">
	  			<button type="button" class="btn btn-default dropdown-toggle" style="border:0;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<div style="float:left;padding:4px 8px 0 0;"></div>
					<i class="fa fa-user-circle fa-2x"></i>
	  			</button>
	  			<ul class="dropdown-menu dropdown-menu-right" style="text-align: right;">
					<li><a id="accountBtn" href="#">Account</a></li>
					<li><a id="helpBtn" href="#">Help</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="signout/">Sign Out</a></li>
	  			</ul>
			</div>
		
		</div>
	</div>
</div>

<div align="center">
	<div id="channelList">
	
		<div align="center">
			<div class="channelListHeader">
				<div class="alert alert-success" role="alert" style="margin-top:25px;">
					<h3>Thanks for signing up!</h3>
					Check your inbox for our welcome email, it contains a few important links.<br>
					If you ever get stuck, <a href="#" id="help" class="alert-link">help is just a click away</a>.<br>
					You can always watch our <a href="/help/first-run/" class="alert-link" target="_blank">First Run video again</a>.
				</div>
			</div>
			
			<table id="channelListContainer" class="table table-striped">
				<tbody>
					<tr>
						<td width="120" style="vertical-align:middle;" align="center">
							<div class="btn-group" role="group" aria-label="...">
								<button type="button" class="settings btn btn-default"><i class="fa fa-cog fa-fw"></i></button>
								<button type="button" class="connections btn btn-default"><i class="fa fa-chain fa-fw"></i></button>
							</div>
						</td>
						<td style="vertical-align:middle;">Your Channel</td>
						<td width="180" style="vertical-align:middle;" align="right">
							<button id="newVideo" disabled="" type="button" class="btn btn-default" onclick="">
								<i class="fa fa-plus fa-fw"></i> New Video
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		
				
			<div id="connect70">
				<table width="90%">
					<tbody>
						<tr>
							<td style="padding:0;">
								<div class="alert alert-success" role="alert">
									<div class="row">
										<div class="col-md-4" style="padding:11px 0;" align="center">
											<strong>Start here:</strong> click to connect your Social Networks
										</div>
	
										<div class="col-md-1 col-xs-3" align="center">
											<button data-social="facebook" type="button" class="connectSocial btn btn-default">
												<i class="fa fa-facebook-square fa-2x" style="opacity:0.5;cursor:pointer;"></i>
											</button>
										</div>
							
										<div class="col-md-1 col-xs-3" align="center">
											<button data-social="youtube" type="button" class="connectSocial btn btn-default">
												<i class="fa fa-youtube-square fa-2x" style="opacity:0.5;cursor: pointer;"></i>
											</button>
										</div>
						
										<div class="col-md-1 col-xs-3" align="center">
											<button data-social="vimeo" type="button" class="connectSocial btn btn-default">
							  					<i class="fa fa-video-camera fa-2x" style="opacity:0.5;cursor: pointer;"></i>
											</button>
										</div>
							
										<div class="col-md-1 col-xs-3" align="center">
											<button data-social="twitter" type="button" class="connectSocial btn btn-default">
												<i class="fa fa-twitter-square fa-2x" style="opacity:0.5;cursor: pointer;"></i>
											</button>
										</div>
	
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		
			
			<div align="left">
			
				<div id="newChannel1" align="left" style="margin-top:8px;padding-left:16px;">
					<button id="newChannel" type="button" class="btn btn-default" disabled="">New Channel</button>
				</div>
		
				<div id="newChannel2" align="left" style="margin-top:8px;padding-left:16px;display:none;width:250px;">
					<div class="input-group">
			  			<input type="text" class="form-control" placeholder="New Channel Name" name="channelName" id="channelName">
						<span id="createNewChannel" class="input-group-addon"><i class="fa fa-check"></i></span>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>



<script>
	var first = "<?php echo $first; ?>";
</script>