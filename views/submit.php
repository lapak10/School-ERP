  	<?php
  	//Code which outputs the common looks
  	 echo $common;?>   
    
    <!-- Begin of #main -->
    <div id="main" role="main">
    	
    	<!-- Begin of titlebar/breadcrumbs -->
		<div id="title-bar">
			<ul id="breadcrumbs">
				<li><a href="dashboard.html" title="Home"><span id="bc-home"></span></a></li>
				<li class="no-hover">Table</li>
			</ul>
		</div> <!--! end of #title-bar -->
		
		<div class="shadow-bottom shadow-titlebar"></div>
		
		<!-- Begin of #main-content -->
		<div id="main-content">
			<div class="container_12">
			
			<div class="grid_12">
				<h1>Home Work</h1>
				<?php if(isset($attendence_done)){ ?>
					<div class="alert success"><span class="hide">x</span><strong>Todays attendence has been stored.</strong></div>
			<?php	}?>
						
					<span><a onclick='javascript:$.jGrowl("Message", { theme: 'success' });'>Check All </a></span>|
					<span><a onclick='$.jGrowl("Message", { theme: 'success' });'> UnCheck All</a></span>
			</div>
			
			<div class="grid_12">
			<div class="grid_12">
				<div class="block-border">
					<div class="block-header">
						<h1>Form-Elements with Validation</h1><span></span>
					</div>
					<form id="validate-form" class="block-content form" action='<?php echo site_url('welcome/submit')?>' method="post">
						<div class="_100">
							<p><label for="textfield">Title of the Homework</label><input id="textfield" name="textfield" class="required text" type="text" value=""></p>
						</div>
						
						<div class="_100">
							<p><label for="textarea">Homework</label><textarea id="textarea" name="textarea" class="required uniform" rows="5" cols="40"></textarea></p>
						</div>
						
						<div class="_100">
							<p><label for="datepicker">Date of Submission</label><input id="datepicker" name="datepicker" class="required hasDatepicker text" type="text" value=""></p>
						</div>
						
						<div class="_100">
							<p>
								<label for="select">Select</label>
								<select style="opacity: 0;">
									<option>XII-A</option>	
									<option>XI-A</option>
									<option>VII-B</option>
								</select>
							</p>
						</div>
						
						<div class="_100">
							<p>
								<label for="file">Upload a file</label>
								<div class="uploader" id="uniform-undefined"><input type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
							</p>
						</div>
						
						<div class="_50">
							<p>
								<span class="label">Radio-Buttons</span>
								<label><div class="radio" id="uniform-undefined"><span><input type="radio" name="radio" style="opacity: 0;"></span></div> Dolor sit</label>
								<label><div class="radio" id="uniform-undefined"><span><input type="radio" name="radio" style="opacity: 0;"></span></div> Et accusam</label>
								<label><div class="radio" id="uniform-undefined"><span><input type="radio" name="radio" style="opacity: 0;"></span></div> Justo duo</label>
							</p>
						</div>
						<div class="_50">
							<p>
								<span class="label">Checkboxes</span>
								<label><div class="checker" id="uniform-undefined"><span><input type="checkbox" name="checkbox" style="opacity: 0;"></span></div> Check me</label>
								<label><div class="checker" id="uniform-undefined"><span><input type="checkbox" style="opacity: 0;"></span></div> Or me</label>
								<label><div class="checker" id="uniform-undefined"><span><input type="checkbox" style="opacity: 0;"></span></div> Lorem ipsum</label>
							</p>
						</div>
						
						<div class="clear"></div>
						<div class="block-actions">
							<ul class="actions-left">
								<li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Reset</a></li>
							</ul>
							<ul class="actions-right">
								<li><input type="submit" class="button" value="Click here to validate the form!"></li>
							</ul>
						</div>
					</form>
				</div>
			</div>
			</div>
			
			<div class="clear height-fix"></div>

		</div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->