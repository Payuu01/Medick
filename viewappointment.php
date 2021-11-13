<?php 
include('top_header.php');
$app_id = $_GET['user'];
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
                   <h2 class="title1">Appointments Details 
                    <span class="pull-right">
                        <a href="appointment.php" class="btn btn-success">All Appointments</a>
                        <a href="acceptappointment.php?uid=<?php echo $app_id ?>"class="btn btn-warning">Accept Appointment</a>
                        <a href="cancelappointment.php?uid=<?php echo $app_id ?>"class="btn btn-warning">Cancel Appointment</a>
                         
                        <a href="completeappointment.php?uid=<?php echo $app_id ?>"class="btn btn-info">Complete Appointment</a>
                    </span></h2>
                    <div class="panel-body widget-shadow">
                      <table class="table">
                            <thead>
                                <tr>
                                 
                                  <th>Appointment Number</th>
                                  <th>Date</th>
                                  <th>time</th>
                                  <th>On</th>
                                  <th>Type</th>
                                  <th>Amount</th>
                                  <th>Payment Status</th>
                                  <th>Payment Method</th>
                                  <th>Status</th>
                                
                                </tr>
                            </thead>
                            <tbody>


<?php
require('connect.php');
$query="select * from appointment_tbl inner join doctor_tbl on doctor_tbl.doctor_id = appointment_tbl.appointment_doctor inner join patient_tbl on patient_tbl.patient_id=appointment_tbl.appointment_patient where appointment_id='$app_id' ";
$data=mysql_query($query, $con);
$result= mysql_fetch_assoc($data);
   $num = 1;
  // while($result=mysql_fetch_assoc($data))
  //   {
        $uid = $result['appointment_id'];
    
        echo"
        <tr>
    
        <td>".$result['appointment_number']."</td>
        <td>".$result['appointment_date']."</td>
        <td>".$result['appointment_time']."</td>
        <td>".$result['appointment_on']."</td>
        <td>".$result['appointment_type']."</td>
        <td>".$result['appointment_amount']."</td>
        <td>".$result['appointment_paymentstatus']."</td>
        <td>".$result['appointment_paymentmethod']."</td>
        <td>".$result['appointment_status']."</td>
        </tr>
        
        ";
     //   $num++;
   // }
?>

</tbody>
</table>
</div>
<br>
<div class="row">
   <div class="col-md-6">
       <h4>Patient Details</h4>
        <div class="panel-body widget-shadow">
          <table class="table">
                <tbody>
                    <tr>
                      <th>Patient Name</th>
                      <th><?php echo $result['patient_name'] ?></th>
                      
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
                        <th>Anymedication</th>
                      <th><?php echo $result['patient_anymedication'] ?></th>
                    </tr>
                </tbody>
            </table>
        </div>
   </div>
   <div class="col-md-6">
       
      <h4>Doctor Details</h4>
        <div class="panel-body widget-shadow">
          <table class="table">
                <tbody>
                    <tr>
                      <th>Doctor Name</th>
                      <th><?php echo $result['doctor_name'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                      <th><?php echo $result['doctor_phone'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Gender</th>
                      <th><?php echo $result['doctor_gender'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Specialization</th>
                      <th><?php echo $result['doctor_specialization'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Rating</th>
                      <th><?php echo $result['doctor_rating'] ?></th>
                      
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
