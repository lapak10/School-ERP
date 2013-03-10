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
			
			<?php 
		if(isset($upload_data)){?>
		
		<div class="alert success"><strong>Success</strong><?php echo var_dump($upload_data)?></div>
		<?php }if(isset($error)){?>
		
		<div class="alert error"><strong>Oops!</strong><?php echo $error;?>.</div>	
			
		<?php }; ?>
			
				<div class="block-border">
					<div class="block-header">
						<h1>Form-Elements with Validation</h1><span></span>
					</div>
				
<?php echo form_open_multipart('welcome/upload_assignment',array('id'=>'validate-form','class'=>'block-content form'));?>
						<div class="_100">
							<p><label for="textfield">Subject</label><input id="textfield" name="textfield" class="required text" type="text" value=""></p>
						</div>
						
						<div class="_100">
							<p><label for="textarea">Description (Optional)</label><textarea id="textarea" name="textarea" class="required uniform" rows="5" cols="40"></textarea></p>
						</div>
						
						<div class="_100">
							<p><label for="datepicker">Datepicker</label><input id="datepicker" name="datepicker" class="required hasDatepicker text" type="text" value=""></p>
						</div>
						
						<div class="_100">
							<p>
								<label for="select">Select</label>
								<select style="opacity: 0;" class="valid">
									<option>8 A</option>
									<option>9 B</option>
									<option>10 A</option>
								</select>
							</p>
						</div>
						
						<div class="_100">
							<p>
								<label for="file">Upload a file</label>
								<div class="uploader" id="uniform-undefined"><input type="file" size="19" name='userfile' style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
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
			
			<div class="clear height-fix"></div>

		</div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->