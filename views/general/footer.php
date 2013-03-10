<footer id="footer">
	<div class="container_12">
		<div class="grid_12">
			<div class="footer-icon align-center">
				<a class="top" href="#top"></a>
			</div>
		</div>
	</div>
</footer>
<!--! end of #container -->


<!-- JavaScript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script
	src="<?php echo $base_url; ?>assets/js/libs/jquery-1.6.2.min.js"></script>



<!-- scripts concatenated and minified via ant build script-->
<script
	defer src="<?php echo $base_url; ?>assets/js/plugins.js"></script>
<!-- lightweight wrapper for consolelog, optional -->
<script
	defer
	src="<?php echo $base_url; ?>assets/js/mylibs/jquery-ui-1.8.15.custom.min.js"></script>
<!-- jQuery UI -->
<script
	defer
	src="<?php echo $base_url; ?>assets/js/mylibs/jquery.notifications.js"></script>
<!-- Notifications  -->
<script
	defer
	src="<?php echo $base_url; ?>assets/js/mylibs/jquery.uniform.min.js"></script>
<!-- Uniform (Look & Feel from forms) -->
<script
	defer
	src="<?php echo $base_url; ?>assets/js/mylibs/jquery.validate.min.js"></script>
<!-- Validation from forms -->
<script
	defer
	src="<?php echo $base_url; ?>assets/js/mylibs/jquery.dataTables.min.js"></script>
<!-- Tables -->
<script
	defer src="<?php echo $base_url; ?>assets/js/mylibs/jquery.tipsy.js"></script>
<!-- Tooltips -->
<script
	defer src="<?php echo $base_url; ?>assets/js/mylibs/excanvas.js"></script>
<!-- Charts -->
<script
	defer
	src="<?php echo $base_url; ?>assets/js/mylibs/jquery.visualize.js"></script>
<!-- Charts -->
<script
	defer
	src="<?php echo $base_url; ?>assets/js/mylibs/jquery.slidernav.min.js"></script>
<!-- Contact List -->
<script
	defer src="<?php echo $base_url; ?>assets/js/common.js"></script>
<!-- Generic functions -->
<script
	defer src="<?php echo $base_url; ?>assets/js/script.js"></script>
<!-- Generic scripts -->
<script
	defer
	src="<?php echo $base_url; ?>assets/js/mylibs/jquery.jqplot.min.js"></script>
<!-- jQplot js file -->
<script
	defer
	src="<?php echo $base_url; ?>assets/js/mylibs/jqplot.barRenderer.min.js"></script>
<!-- jQplot js file -->
<script
	defer
	src="<?php echo $base_url; ?>assets/js/mylibs/jqplot.categoryAxisRenderer.min.js"></script>
<!-- jQplot js file -->

<script type="text/javascript">
	jQuery('document').ready(function($) {
		
		/*
		 * Form Validation
		
		 $.validator.setDefaults({
				submitHandler: function(e) {
					$.jGrowl("Form was successfully submitted.", { theme: 'success' });
					$(e).parent().parent().fadeOut();
					v.resetForm();
					v2.resetForm();
					v3.resetForm();
				}
			});
			 */
		var v = $("#create-user-form").validate();
		jQuery("#reset").click(function() { v.resetForm(); $.jGrowl("User was not created!", { theme: 'error' }); });
		
		var v2 = $("#write-message-form").validate();
		jQuery("#reset2").click(function() { v2.resetForm(); $.jGrowl("Message was not sent.", { theme: 'error' }); });
		
		var v3 = $("#create-folder-form").validate();
		jQuery("#reset3").click(function() { v3.resetForm(); $.jGrowl("Folder was not created!", { theme: 'error' }); });
		
		/*
		 * DataTables
		 
		$('#table-example').dataTable({
				"iDisplayLength": 100;
		});
		*/ 
		
		
		/*
		 * Attendence Module
		
		 $('form#test').submit(function(e){
			e.preventDefault();
			if(!$("input:radio").is(":checked")){
                alert('Please mark attendence of all the students');
                return false;
			}else{
			var present=$(':radio[value="present"]').length;
			var absent=$(':radio[value="absent"]').length;
			var other=$(':radio[value="other"]').length;
			var leave=$(':radio[value="leave"]').length;

			var str='';

			if(present){
				str+='present :'+present;
				}
			if(absent){
				str+='\nabsent :'+absent;
				}
			if(leave){
				str+='\nleave :'+leave;
				}
			if(other){
				str+='\nother :'+other;
				}
			confirm(str);
			
			
			}
			 });
	}); */

	/*
	 * Attendence Module
	 */
	
		
	 $('#mark_absent_present').toggle(
				  function () {
				    
				    $(':radio[value="present"]').closest('span').addClass('checked');
				    $(':radio[value="absent"]').closest('span').removeClass('checked');
				    $(':radio[value="leave"]').closest('span').removeClass('checked');
				    $(':radio[value="other"]').closest('span').removeClass('checked');
				    $(':radio[value="present"]').attr("checked","checked");
				    $(':radio[value="absent"]').removeAttr("checked");
				    $(':radio[value="leave"]').removeAttr("checked");
				    $(':radio[value="other"]').removeAttr("checked");
				    $(this).text('Mark all absent');
				  },
				  function () {
				   
				   $(':radio[value="present"]').closest('span').removeClass('checked');
				    $(':radio[value="absent"]').closest('span').addClass('checked');
				    $(':radio[value="leave"]').closest('span').removeClass('checked');
				    $(':radio[value="other"]').closest('span').removeClass('checked');
				    $(':radio[value="absent"]').attr("checked","checked");
				    $(':radio[value="present"]').removeAttr("checked");
				    $(':radio[value="leave"]').removeAttr("checked");
				    $(':radio[value="other"]').removeAttr("checked");
				    $(this).text('Mark all present');
				  }
				);

	
	/*
	 * Charts
	 */
	//$('#graph-data').visualize({type: 'line', height: 250}).appendTo('#tab-line').trigger('visualizeRefresh');
	//$('#graph-data').visualize({type: 'area', height: 250}).appendTo('#tab-area').trigger('visualizeRefresh');
	//$('#graph-data').visualize({type: 'pie', height: 250}).appendTo('#tab-pie').trigger('visualizeRefresh');
	//	$('#graph-data').visualize({type: 'bar', height: 250}).appendTo('#tab-bar').trigger('visualizeRefresh');
	
	/*
	 * Tabs
	 */
	$("#specify-a-unique-tab-name").createTabs();
	$("#tab-graph").createTabs();


	/*
	 * jQplot js code
	*/
	var chart_div=$('#chart1');//Lets first take the div into a variable,to makes our script run faster.
	//Before just blindly adding bar charts,lets check if its parent div exits or not,addOnlyWhenDiv is present.
	if(chart_div.length){
	$.jqplot.config.enablePlugins = true;
    var s1 = [2, 6, 7, 10];
    var ticks = ['Absent', 'Present', 'Leave', 'Other'];
     
    plot1 = $.jqplot('chart1', [s1], {
        // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
        animate: !$.jqplot.use_excanvas,
        seriesColors:['#85802b', '#00749F', '#73C774', '#C7754C', '#17BDB8'],
        seriesDefaults:{
            renderer:$.jqplot.BarRenderer,
            pointLabels: { show: true },
            rendererOptions: {
                // Set varyBarColor to tru to use the custom colors on the bars.
                varyBarColor: true
            }
        },
        axes: {
            xaxis: {
                renderer: $.jqplot.CategoryAxisRenderer,
                ticks: ticks
            }
        },
        highlighter: { show: false }
    });
   
   
    /*
	 * Function which handles the jqplotDataClick which is fired when a user clicks the bar graph.
	 */

	var list={"present":["anand","anujay","akash","vivek"],"absent":["radha","meenal","shruti","lekha"]}; 
	
    $('#chart1').bind('jqplotDataClick', 
            function (ev, seriesIndex, pointIndex, data) {
			
        
                $('#chart1_info').fadeOut("slow",function(){
       $('#loader').fadeIn("slow",function(){
    	  // $('#chart1_info').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
    	   $('.block-list').empty();
    	   $('div#chart1_info h1').html(ticks[pointIndex]);
    	   $.each(list.present,function(key,value){

    		   $('.block-list').append('<li>'+value+'</li>');

        	   })
        	   
    	   $(this).delay('2000').fadeOut('slow',function(){

$('#chart1_info').show('clip');
        	   });
           });
      
      
      
   	  
                    });
            }
        );
	};
    
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
