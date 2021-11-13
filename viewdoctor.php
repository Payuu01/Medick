<?php 
include('top_header.php');
$doc_id=$_GET['user'];
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
                   <h2 class="title1">Doctor Detail
                    <span class="pull-right">
                        <a href="doctors.php" class="btn btn-success">All Labs</a>
                          <a href="acceptdoctor.php?uid=<?php echo $doc_id ?>"class="btn btn-warning">Accept Doctor</a>
                        <a href="canceldoctor.php?uid=<?php echo $doc_id ?>"class="btn btn-warning">Cancel Doctor</a>               
                     </span></h2>
                        
                    

<?php
require('connect.php');
$did=$_GET['user'];
$query="select * from doctor_tbl where doctor_id='$did'";
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
                        <th>Image</th>
                      <th><img src="upload/<?php echo $result['doctor_img'] ?>" style="width:50%;height: 50%;"></th>
                    </tr>
                    <tr>
                      <th>Doctor Name</th>
                      <th><?php echo $result['doctor_name'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                      <th><?php echo $result['doctor_phone'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Email</th>
                      <th><?php echo $result['doctor_email'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Password</th>
                      <th><?php echo $result['doctor_password'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Address</th>
                      <th><?php echo $result['doctor_address'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Gender</th>
                      <th><?php echo $result['doctor_gender'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>City</th>
                      <th><?php echo $result['doctor_city'] ?></th>
                      
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
                        <th>State</th>
                      <th><?php echo $result['doctor_state'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Pin Code</th>
                      <th><?php echo $result['doctor_pincode'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Specialization</th>
                      <th><?php echo $result['doctor_specialization'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Expertize</th>
                      <th><?php echo $result['doctor_expertize'] ?></th>
                      
                    </tr>

                    <tr>
                        <th>Keywords</th>
                      <th><?php echo $result['doctor_keywords'] ?></th>
                      
                    </tr>

                    <tr>
                        <th>Experience</th>
                      <th><?php echo $result['doctor_experience'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Rating</th>
                      <th><?php echo $result['doctor_rating'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Addedon</th>
                      <th><?php echo $result['doctor_addedon'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Status</th>
                      <th><?php echo $result['doctor_status'] ?></th>
                      
                    </tr>
                    <tr>
                        
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
