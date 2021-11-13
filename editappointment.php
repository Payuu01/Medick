<?php
  require('connect.php');
  $userid = $_GET['user'];

  $sql = "select * from appointment_tbl where appointment_id = '$userid'";
  $res = mysql_query($sql, $con);

  $usr = mysql_fetch_assoc($res);

?>

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
                    <h2 class="title1">Edit record <span class="pull-right">
                        <a href="appointment.php" class="btn btn-info">All Appointments</a></span></h2>
                    <div class="panel-body widget-shadow">
                     <form method="post" action="updateappointment.php">
                        <div class="row">
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Appointment Number</label>
                                          <input type="number" class="form-control" name="unumber" value="<?php echo $usr['appointment_number']?>">
                               </div>
                            </div>
                            <input type="hidden" name="uid" value="<?php echo $usr['appointment_id'] ?>">


                            <div class="col-md-4">
                               <div class="form-group">Appointment Date </label>
                                          <input type="date" class="form-control" name="udate"value="<?php echo $usr['appointment_date']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Appointment Time </label>
                                          <input type="time" class="form-control" name="utime"value="<?php echo $usr['appointment_time']?>">
                               </div>
                            </div>

                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Doctor Name</label>
                                          <input type="text" class="form-control" name="udoctor"value="<?php echo $usr['appointment_doctor']?>">
                               </div>
                            </div>

                           
                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Patient Name</label>
                                          <input type="text" class="form-control" name="upatient"value="<?php echo $usr['appointment_patient']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Appointment On</label>
                                          <input type="date" class="form-control" name="uon"value="<?php echo $usr['appointment_on']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Appointment Type </label>
                                          <?php $at = $usr['appointment_type']; ?>
                                          <select name="utype" class="form-control">
                                                <option value="1" <?php if($at == 1){echo'selected';} ?>>Call</option>
                                                 <option value="2" <?php if($at == 2){echo'selected';} ?>>Video</option>
                                                 <option value="3" <?php if($at == 3){echo'selected';} ?>>Chat</option>
                                                 <option value="4" <?php if($at == 4){echo'selected';} ?>>In-person</option>
                                         </select>
                               </div>
                            </div>
                            
                           
                            
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Amount </label>
                                          <input type="number" class="form-control" name="uamount"value="<?php echo $usr['appointment_amount']?>">
                               </div>
                            </div>


                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Payment Status </label>
                                          <input type="text" class="form-control" name="upaymentstatus"value="<?php echo $usr['appointment_paymentstatus']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Payment Method</label>
                                        <?php $pm = $usr['appointment_paymentmethod']; ?>
                                          <select name="umethod" class="form-control">
                                                <option value="1" <?php if($pm == 1){echo'selected';} ?>>Cash</option>
                                                 <option value="2" <?php if($pm == 2){echo'selected';} ?>>Checks</option>
                                                 <option value="3" <?php if($pm == 3){echo'selected';} ?>>UPI</option>
                                                 <option value="4" <?php if($pm == 4){echo'selected';} ?>>Debit Card</option>
                                                 <option value="5" <?php if($pm == 5){echo'selected';} ?>>Credit Card</option>
                                         </select>
                               </div>
                            </div>

       


                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Status</label>
                                
                                       <?php $st = $usr['appointment_status']; ?>
                                               <select name="ustatus" class="form-control">
                                                <option value="0" <?php if($st == 0){echo'selected';} ?>>Pending</option>
                                                 <option value="1" <?php if($st == 1){echo'selected';} ?>>Confirmed</option>
                                                 <option value="2" <?php if($st == 2){echo'selected';} ?>>Cancelled</option>
                                                 <option value="3" <?php if($st == 3){echo'selected';} ?>>Completed</option>
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
</body>
</html>
