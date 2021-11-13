<?php include('top_header.php');?>
<?php
require('connect.php');
$sql = "select * from patient_tbl";
$res = mysql_query($sql, $con);


$sql2 = "select * from doctor_tbl";
$res2 = mysql_query($sql2, $con);

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
                    <h2 class="title1">Add Appointment<span class="pull-right">
                        <a href="appointment.php" class="btn btn-info">All Appointments</a></span></h2>
                    <div class="panel-body widget-shadow">
                     <form method="post" action="insertappointment.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Appointment Number</label>
                                          <input type="number" class="form-control" name="unumber">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                <label>Appointment Date</label>
                                          <input type="date" class="form-control" name="udate">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Appointment Time </label>
                                          <input type="time" class="form-control" name="utime">
                               </div>
                            </div>

                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Doctor Name</label>
                                    <select class="form-control" name="udoctor">
                                        <?php
                                          while($row = mysql_fetch_assoc($res2)){
                                          echo"<option value='".$row['doctor_id']."'>".$row['doctor_name']."</option>";
                                         }
                                        ?>
                                    </select>
                               </div>
                            </div>

                           
                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Patient Name</label>
                                    <select class="form-control" name="upatient">
                                        <?php
                                          while($row2 = mysql_fetch_assoc($res)){
                                          echo"<option value='".$row2['patient_id']."'>".$row2['patient_name']."</option>";
                                         }
                                        ?>
                                    </select>
                                     
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Appointment On</label>
                                          <input type="date" class="form-control" name="uon">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Appointment Type </label>
                                          <select name="utype" class="form-control">
                                                <option value="1">Call</option>
                                                 <option value="2">Video</option>
                                                 <option value="3">Chat</option>
                                                 <option value="4">In-person </option>
                                         </select>
                                    
                               </div>
                            </div>
                            
                           
                            
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Amount </label>
                                          <input type="number" class="form-control" name="uamount">
                               </div>
                            </div>


                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Payment Status </label>
                                          <input type="text" class="form-control" name="upaymentstatus">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Payment Method</label>
                                         <select name="umethod" class="form-control">
                                                <option value="1">Cash</option>
                                                 <option value="2">Checks</option>
                                                 <option value="3">UPI</option>
                                                 <option value="4">Debit Card</option>
                                                 <option value="5">Credit Card</option>
                                         </select>
                                    
                               </div>
                            </div>

                            
                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Status</label>
                                          <select name="ustatus" class="form-control">
                                                 <option value="0">Pending</option>
                                                 <option value="1">Confirmed</option>
                                                 <option value="2">Cancelled</option>
                                                 <option value="3">Completed</option>
                                         </select>
                               </div>
                            </div>
                        </div>

                             
                             <center><input type="submit" class="btn btn-primary" value="Upload"></center>
                           </form>

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