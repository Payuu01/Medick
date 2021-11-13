<?php
  require('connect.php');
  $userid = $_GET['user'];

  $sql = "select * from lab_tbl where lab_id = '$userid'";
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
                        <a href="lab.php" class="btn btn-info">All labs</a></span></h2>
                    <div class="panel-body widget-shadow">
                     <form method="post" action="updatelab.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Lab Name</label>
                                          <input type="text" class="form-control" name="uname" value="<?php echo $usr['lab_name']?>">
                               </div>
                            </div>
                            <input type="hidden" name="uid" value="<?php echo $usr['m_course_id'] ?>">


                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Phone Number</label>
                                          <input type="number" class="form-control" name="unumber"
                                          value="<?php echo $usr['lab_phone']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Lab Address</label>
                                          <input type="text" class="form-control" name="uaddress"value="<?php echo $usr['lab_address']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Password</label>
                                          <input type="text" class="form-control" name="upassword"value="<?php echo $usr['lab_password']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>City</label>
                                          <input type="text" class="form-control" name="ucity"value="<?php echo $usr['lab_city']?>">
                               </div>
                            </div>

                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>State</label>
                                          <input type="text" class="form-control" name="ustate"value="<?php echo $usr['lab_state']?>">
                               </div>
                            </div>



                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Lab Image</label>
                                          <input type="file" class="form-control" name="myfile"value="<?php echo $usr['lab_image']?>">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Lab Banner</label>
                                          <input type="file" class="form-control" name="uimg"value="<?php echo $usr['lab_banner']?>">
                               </div>
                            </div>

                    
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Rating </label>
                                          <input type="text" class="form-control" name="urating"value="<?php echo $usr['lab_rating']?>">
                               </div>
                            </div>




                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Status</label>
                                
                                       <?php $st = $usr['lab_status']; ?>
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
