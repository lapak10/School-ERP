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
				
<?php echo form_open_multipart('assignment/upload_assignment',array('id'=>'validate-form','class'=>'block-content form'));?>
						<ul class="collapsible">
		<li><a href="./dashboard_c/"><img>
				src="<?php echo $base_url; ?>assets/img/icons/packs/fugue/16x16/dashboard.png">Dashboard<span
				class="badge">2</span> </a></li>
		<li><a href="javascript:void(0);"><img
				src="<?php echo $base_url; ?>assets/img/icons/packs/fugue/16x16/newspaper.png">Attendence</a>
			<ul class="sub">
				<li><a href="javascript:void(0);">Mark Attendence</a></li>
				<li><a href="<?php echo site_url('welcome/view_attendence')?>">Attendence Report</a></li>
			</ul>
		</li>
		<li><a href="javascript:void(0);"><img
				src="<?php echo $base_url; ?>assets/img/icons/packs/fugue/16x16/newspaper.png">Assignment</a>
			<ul class="sub">
				<li><a href="<?php echo site_url('assignment')?>">Submit Assignment</a></li>
				<li><a href="<?php echo site_url('assignment/view_uploaded_assignement')?>">Upload File</a></li>
			</ul>
			</li>
			</ul>
					</form>
				</div>
			</div>
			
			<div class="clear height-fix"></div>

		</div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->