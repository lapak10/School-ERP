
<?php
//Code which outputs the common looks
    echo $common;?>

<!-- Begin of #main -->
<div
   id="main" role="main">

   <!-- Begin of titlebar/breadcrumbs -->
   <div id="title-bar">
      <ul id="breadcrumbs">
         <li><a href="dashboard.html" title="Home"><span id="bc-home"></span>
         </a></li>
         <li class="no-hover">Table</li>
      </ul>
   </div>
   <!--! end of #title-bar -->

   <div class="shadow-bottom shadow-titlebar"></div>

   <!-- Begin of #main-content -->
   <div id="main-content">
      <div class="container_12">

         <div class="grid_12 block-border" id="tab-graph">

            <div class="block-header">
               <h1>Attendence Report</h1>
               
            </div>
          
             
            <form class="block-content form"
               action="<?php echo site_url('welcome/submit_attendence')?>"
               method="post">

               <div class="_25">
                  <p>
                     <label for="select">Class</label> <select name='class'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                     </select>
                  </p>
               </div>
               <div class="_25">
                  <p>
                     <label name='section' for="select">Section</label> <select
                        name='section'>
                        <option value='A'>A</option>
                        <option value='B'>B</option>
                        <option value='C'>C</option>
                        <option value='D'>D</option>
                        <option value='E'>E</option>
                        <option value='F'>F</option>
                     </select>
                  </p>
               </div>

               <div class="_25">
                  <p>
                     <label name='date' for="select">Date</label> <select name='date'>
                        <?php if(isset($date_list))echo $date_list;?>
                     </select>
                  </p>
               </div>
               <div class="_25">
                  <p>
                     <label for="select">&nbsp</label><input type='submit'
                        class='button blue' value='View Report'>
                  </p>
               </div>
               <div class="clear"></div>

            </form>



            <div class="block-content" id="chart1"></div>

            <!--
               <div class="block-border" id="tab-graph">
               <div class="block-header">
                  <h1>Graph</h1>
                  <ul class="tabs">
							
							
                     <li><a href="#tab-bar">Bar</a></li>
                  </ul>
               </div>
               <div class="block-content tab-container">
					
                Old code for attendence Report 
                  <table id="graph-data" class="graph">
                        <caption>Attendence Report</caption>
                        <thead>
                           <tr>
                              <td></td>
                              <th scope="col">Attendence</th>
										
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">Absent</th>
                              <td><?php echo isset($absent)?$absent:'20' ?></td>
										
										
                           </tr>
                           <tr>
                              <th scope="row">Present</th>
                              <td><?php echo isset($present)?$present:'20' ?></td>
										
										
                           </tr>
                           <tr>
                              <th scope="row">Leave</th>
                              <td><?php echo isset($leave)?$leave:'20' ?></td>
										
										
                           </tr>
                           <tr>
                              <th scope="row">Other		</th>
                              <td><?php echo isset($other)?$other:'20' ?></td>
										
										
                           </tr>
										
                        </tbody>
                     </table>
							
						
						
						
                  <div id="tab-bar" class="tab-content"></div>
                  -->
            <div class="block-content" id="cha">
               <center>
                  <img id='loader' style="display: none; cursor: 'wait'"
                     src="<?php echo base_url();?>/assets/img/load.gif">
               </center>

               <div id="chart1_info" style="display: none">
                  <h1>Present</h1>
                  <ul class="block-list"></ul>
               </div>


            </div>


      
</div>
         <div class="clear"></div>
         <div class="clear height-fix"></div>

      </div>
      <!--! end of #container -->
   </div>
   <!--! end of #main-content -->
</div>
<!--! end of #main -->
