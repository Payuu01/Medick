<?php
  require('connect.php');
  $userid = $_GET['user'];

  $sql = "select * from patient_tbl where patient_id = '$userid'";
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
                        <a href="patient.php" class="btn btn-info">All Doctors</a></span></h2>
                    <div class="panel-body widget-shadow">
                     <form method="post" action="updatepatient.php">
                        <div class="row">
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Patient Name</label>
                                          <input type="text" class="form-control" name="uname" value="<?php echo $usr['patient_name']?>">
                               </div>
                            </div>
                            <input type="hidden" name="uid" value="<?php echo $usr['patient_id'] ?>">


                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>
                                        Phone Number
                                    </label>
                                          <input type="number" class="form-control" name="uphone"value="<?php echo 
                                          $usr['patient_phone']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>E-mail</label>
                                          <input type="email" class="form-control" name="uemail"value="<?php echo $usr['patient_email']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Password</label>
                                          <input type="text" class="form-control" name="upass"value="<?php echo $usr['patient_password']?>">
                               </div>
                            </div>


                           <div class="col-md-4">
                               <div class="form-group">
                                    <label> Gender: </label>
                                         
                                          <input type="radio" name="ugender" value="Male">Male<br>
                                          <input type="radio"  name="ugender" value="feMale">Female<br>
                                           <input type="radio" name="ugender" value="other">other<br>
    
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>State</label>
                                          <input type="text" class="form-control" name="ustate"value="<?php echo $usr['patient_state']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>City</label>
                                          <input type="text" class="form-control" name="ucity"value="<?php echo $usr['patient_city']?>">
                               </div>
                            </div>


                           <div class="col-md-4">
                               <div class="form-group">
                                    <label> Address </label>
                                          <input type="text" class="form-control" name="uaddress"value="<?php echo $usr['patient_address']?>">
                               </div>
                            </div>
                            
                            
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Age </label>
                                          <input type="number" class="form-control" name="uage"value="<?php echo $usr['patient_age']?>">
                               </div>
                            </div>


                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Allergies</label>
                                          <input type="text" class="form-control" name="uallergies"value="<?php echo $usr['patient_allergies']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Any Medication </label>
                                          <input type="text" class="form-control" name="uanymedication"value="<?php echo $usr['patient_anymedication']?>">
                               </div>
                            </div>



                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Status</label>
                                
                                       <?php $st = $usr['patient_status']; ?>
                                               <select name="ustatus" class="form-control">
                                                <option value="1" <?php if($st == 1){echo'selected';} ?>>Active</option>
                                                 <option value="0" <?php if($st == 0){echo'selected';} ?>>In-Active</option>
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
