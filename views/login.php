<body class="special-page">

  <!-- Begin of #container -->
  <div id="container">
  	
  	<!-- Begin of LoginBox-section -->
    <section id="login-box">
    	
    	<div class="block-border">
    		<div class="block-header">
    			<h1>Login</h1>
    		</div>
    		<form id="login-form" class="block-content form" action="dashboard.html" method="post">
    			<p class="inline-small-label">
					<label for="username">Username</label>
					<input type="text" name="username" value="" class="required">
				</p>
				<p class="inline-small-label">
					<label for="password">Password</label>
					<input type="password" name="password" value="" class="required">
				</p>
    			<p>
					<label><input type="checkbox" name="keep_logged" /> Auto-login in future.</label>
				</p>
				
				<div class="clear"></div>
				
				<!-- Begin of #block-actions -->
    			<div class="block-actions">
					<ul class="actions-left">
						<li><a class="button" name="recover_password" href="javascript:void(0);">Recover Password</a></li>
						<li class="divider-vertical"></li>
						<li><a class="button red" id="reset-login" href="javascript:void(0);">Cancel</a></li>
					</ul>
					<ul class="actions-right">
						<li><input type="submit" class="button" value="Login"></li>
					</ul>
				</div> <!--! end of #block-actions -->
    		</form>
    		
    		
    	</div>
    </section> <!--! end of #login-box -->
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="./assets/js/libs/jquery-1.6.2.min.js"><\/script>')</script>
  -->
  <script src="./assets/js/libs/jquery-1.6.2.min.js"></script>

  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="<?php echo $assets; ?>js/plugins.js"></script> <!-- lightweight wrapper for consolelog, optional -->
  <script defer src="<?php echo $assets; ?>js/mylibs/jquery.notifications.js"></script> <!-- Notifications  -->
  <script defer src="<?php echo $assets; ?>js/mylibs/jquery.uniform.min.js"></script> <!-- Uniform (Look & Feel from forms) -->
  <script defer src="<?php echo $assets; ?>js/mylibs/jquery.validate.min.js"></script> <!-- Validation from forms -->
  <script defer src="<?php echo $assets; ?>js/mylibs/jquery.tipsy.js"></script> <!-- Tooltips -->
  <script defer src="<?php echo $assets; ?>js/common.js"></script> <!-- Generic functions -->
  <script defer src="<?php echo $assets; ?>js/script.js"></script> <!-- Generic scripts -->
  
  <script type="text/javascript">
	$().ready(function() {
		
		/*
		 * Validate the form when it is submitted
		 */
		var validatelogin = $("#login-form").validate({
			invalidHandler: function(form, validator) {
      			var errors = validator.numberOfInvalids();
      			if (errors) {
        			var message = errors == 1
			          ? 'You missed 1 field. It has been highlighted.'
			          : 'You missed ' + errors + ' fields. They have been highlighted.';
        			$('#login-form').removeAlertBoxes();
        			$('#login-form').alertBox(message, {type: 'error'});
        			
      			} else {
       			 	$('#login-form').removeAlertBoxes();
      			}
    		}
		});
		
		jQuery("#reset-login").click(function() {
			validatelogin.resetForm();
		});
				
	});
  </script>
  <!-- end scripts-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
