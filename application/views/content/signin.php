<div align="center">
	<div class="frontend-div">
	
		<img class="frontend-logo" src="<?php echo assets_url(); ?>images/flux.png" height="160">
		
		<div class="frontend-div">
			<h1>Sign In</h1>
		</div>
		
		<form class="frontend-form form-horizontal">
			<div class="well well-lg">
			 
			  <div class="form-group">
			    <label for="email" class="col-sm-12 text-left">Email Address</label>
			    <div class="col-sm-12" align="right">
			      <input type="email" class="form-control input-lg required maonster-email" id="email" name="email" autocomplete="off">
			    </div>
			  </div>
			
			  <div class="form-group">
			    <label for="password" class="col-sm-12 text-left">Password</label>
			    <div class="col-sm-12" align="right">
			      <input type="password" class="form-control input-lg required maonster-password" id="password" name="password" autocomplete="off">
			    </div>
			  </div>
			
			  <div class="form-group" style="margin-bottom:0;">
			    <div class="col-sm-12">
				<button id="login" type="button" class="submit btn btn-success btn-lg btn-block" data-loading-text="<i class='fa fa-circle-o-notch fa-spin' style='padding:3px 0;'></i>">Sign In</button>
			    </div>
			  </div>
			
			</div>
		</form>
	
	</div>
	
</div>