<?php 
include('top_header.php');
$p_id=$_GET['user'];
?>
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
                <div class="tables">
                   <h2 class="title1">Patient Detail
                    <span class="pull-right">
                        <a href="patient.php" class="btn btn-success">All Patients</a>
                        <a href="acceptpatient.php?uid=<?php echo $p_id ?>"class="btn btn-warning">Accept Patient</a>
                        <a href="cancelpatient.php?uid=<?php echo $p_id ?>"class="btn btn-warning">Cancel Patient</a>
                         <a href="completepatient.php?uid=<?php echo $p_id ?>"class="btn btn-info">Complete Appointment</a>
                     </span></h2>
                        
                    

<?php
require('connect.php');
$pid=$_GET['user'];
$query="select * from patient_tbl where patient_id='$pid'";
$data=mysql_query($query, $con);
$result= mysql_fetch_assoc($data);
  ?>



<div class="row">
   <div class="col-md-6">
       <h4></h4>
        <div class="panel-body widget-shadow">
          <table class="table">
                <tbody>
                    <tr>
                      <th>Patient Name</th>
                      <th><?php echo $result['patient_name'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                      <th><?php echo $result['patient_phone'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Email</th>
                      <th><?php echo $result['patient_email'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Password</th>
                      <th><?php echo $result['patient_password'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>City</th>
                      <th><?php echo $result['patient_city'] ?></th>
                       
                    </tr>
                    <tr>
                         <th>State</th>
                      <th><?php echo $result['patient_state'] ?></th>
                      
                    </tr>
                </tbody>
            </table>
        </div>
   </div>
   <div class="col-md-6">
       
      <h4></h4>
        <div class="panel-body widget-shadow">
          <table class="table">
                <tbody>
                   <tr>
                      <th>Address</th>
                      <th><?php echo $result['patient_address'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Gender</th>
                      <th><?php echo $result['patient_gender'] ?></th>
                      
                    </tr>
                    <tr> 
                     <th>Age</th>
                      <th><?php echo $result['patient_age'] ?></th>
                                             
                    </tr>
                    <tr>
                         <th>Allergies</th>
                      <th><?php echo $result['patient_allergies'] ?></th>
                      
                    </tr>
                    <tr>
                         <th>Any Medication</th>
                      <th><?php echo $result['patient_anymedication'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Status</th>
                      <th><?php echo $result['patient_status'] ?></th>
                      
                    </tr>
                    
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
    <?php include('footer.php');?>
      <!--//footer-->
</div>
        
    <?php include('top_footer.php');?>
</body>
</html>
