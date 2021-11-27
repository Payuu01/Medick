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
                <div class="tables">
                   <h2 class="title1">Appointments List <span class="pull-right">
                        <a href="addappointment.php" class="btn btn-info">Add New</a></span></h2>
                    <div class="panel-body widget-shadow">
                     
                        <h4></h4>
                        <table class="table">
                            <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Appointment Number</th>
                                  <th>Appointment Date</th>
                                  <th>Doctor Name</th>
                                  <th>Patient Name</th>
                                  <th>Status</th>
                                  <th>Option</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>


<?php
require('connect.php');
$query="select * from appointment_tbl";
$data=mysql_query($query, $con);
//$result= mysql_fetch_assoc($data);
   $num = 1;
  while($result=mysql_fetch_assoc($data))
    {
        $uid = $result['appointment_id'];
        if($result['appointment_status'] == 1){
            $status = "Confirmed";
        }else if($result['appointment_status'] == 2){
           $status = "Cancelled";
        }else if($result['appointment_status'] == 3){
           $status = "Completed";
        }else{
           $status = "Pending";
        }
        echo"
        <tr>
        <td>".$num."</td>
        <td>".$result['appointment_number']."</td>
        <td>".$result['appointment_date']."</td>
        <td>".$result['appointment_doctor']."</td>
         <td>".$result['appointment_patient']."</td>
        <td>".$status."</td>
        <td><a href='editappointment.php?user=$uid'>Edit</a> | <a href='deleteappointment.php?user=$uid'>Delete</a></td>
        <td><a data-toggle='tooltip' title='View Appointment' href='viewappointment.php?user=$uid'><i class='fa fa-eye'></i></a></td>

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
                   <!--footer-->
    <?php include('footer.php');?>
      <!--//footer-->
    </div>
        
    <?php include('top_footer.php');?>
</body>
</html>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>