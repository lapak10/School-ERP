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
				<h1>Attendence Sheet (<?php echo $date_heading; ?>)</h1>
				<?php if(isset($attendence_done)){ ?>
					<div class="alert success"><span class="hide">x</span><strong>Todays attendence has been stored.</strong></div>
			<?php	}?>
						
					<span><a onclick='javascript:$.jGrowl("Message", { theme: 'success' });'>Check All </a></span>|
					<span><a onclick='$.jGrowl("Message", { theme: 'success' });'> UnCheck All</a></span>
			</div>
			
			<div class="grid_12">
				<div class="block-border">
					<div class="block-header">
						<h1>Class XII-A</h1><span></span>
					</div>
					<div class="block-content"><p>
						
					<span><a id='mark_absent_present' style="cursor:pointer">Mark All Present</a></span></p>
</div>
					<div class="block-content">
					  
						<?php echo $table_data;?>
						<div class="block-actions">
						<ul class="actions-left">
								<li><a href="javascript:void(0);" class="button red">Mark All Present</a></li>
								</ul>
							<ul class="actions-right">
								<li><input type="submit" name="submit" value="Save Attendence" class="button"></li>
							</ul>
						
       
    </div><!--! end of .block-actions -->
					</div>
				</div>
			</div>
			
			<div class="clear height-fix"></div>

		</div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->