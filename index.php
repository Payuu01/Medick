
<?php include('top_header.php');?>

<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<?php include('sidebar.php');?>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<?php include('header.php');?>

		

		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-calendar icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>Appointments</strong></h5>
                      <span>3</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-file user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>Reports</strong></h5>
                      <span>3</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-stethoscope user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>Tests</strong></h5>
                      <span>3</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-flask dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>Labs</strong></h5>
                      <span>2</span>
                    </div>
                </div>
        	 </div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1450</strong></h5>
                      <span>Total Users</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>
		
		<br><br>
    <div class="row">
       <div class="col-md-12">
      
         <div class="panel-body widget-shadow">
                     
                        <h3>Pending Labs</h3>
                        <table class="table">
                             <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Lab Nmae</th>
                                  <th>Phone Number</th>
                                  <th>Lab Address</th>
                                  <th>State</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
 <?php
require('connect.php');
$query="select * from lab_tbl where lab_status='0'";
$data=mysql_query($query, $con);
//$result= mysql_fetch_assoc($data);
   $num = 1;
  while($result=mysql_fetch_assoc($data))
    {
        $uid = $result['lab_id'];
    
        echo"
        <tr>
        <td>".$num."</td>
        <td>".$result['lab_name']."</td>
        <td>".$result['lab_phone']."</td>
        <td>".$result['lab_address']."</td>
        <td>".$result['lab_state']."</td>
        <td><a href='viewlab.php?user=$uid'><i class='fa fa-eye'></i></a></td>
        </tr>
        
        ";
        $num++;
    }
?>

</tbody>
</table>

</div>
</div>
</div>



       </div>
       <div class="col-md-12">
       	  <div class="panel-body widget-shadow">
                     
                        <h3>Pending Doctors</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Doctors Name </th>
                                  <th>Phone Number</th>
                                  <th>Specialization</th>
                                  <th>State</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>



<?php
require('connect.php');
$query="select * from doctor_tbl where doctor_status = '0'";
$data=mysql_query($query, $con);
//$result= mysql_fetch_assoc($data);
   $num = 1;
  while($result=mysql_fetch_assoc($data))
    {
        $uid = $result['doctor_id'];
    
        echo"
        <tr>
        <td>".$num."</td>
        <td>".$result['doctor_name']."</td>
        <td>".$result['doctor_phone']."</td>
         <td>".$result['doctor_specialization']."</td>
          <td>".$result['doctor_state']."</td>
        <td><a href='viewdoctor.php?user=$uid'><i class='fa fa-eye'></i></a></td>
        </tr>
        
        ";
        $num++;
    }
?>

</tbody>
</table>

</div>
</div>
</div>

       </div>
    </div>				

				
			</div>
		</div>
	<!--footer-->
	<?Php include('footer.php');?>
	  <!--//footer-->
	</div>
		
	<?Php include('top_footer.php');?>