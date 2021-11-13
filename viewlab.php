<?php
include('top_header.php');
$l_id=$_GET['user'];
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
                   <h2 class="title1">Lab Detail
                    <span class="pull-right">
                        <a href="lab.php" class="btn btn-success">All Labs</a>
                         <a href="acceptlab.php?uid=<?php echo $l_id ?>"class="btn btn-warning">Accept LAb</a>
                        <a href="cancellab.php?uid=<?php echo $l_id ?>"class="btn btn-warning">Cancel Lab</a>
                     </span></h2>
                        
                    

<?php
require('connect.php');
$lid=$_GET['user'];
$query="select * from lab_tbl where lab_id='$lid'";
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
                      <th>Lab Name</th>
                      <th><?php echo $result['lab_name'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                      <th><?php echo $result['lab_phone'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Address</th>
                      <th><?php echo $result['lab_address'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Password</th>
                      <th><?php echo $result['lab_password'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Image</th>
                      <th><img src="upload/<?php echo $result['lab_image'] ?>" style="width:100%"></th>
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
                      <th>City</th>
                      <th><?php echo $result['lab_city'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>State</th>
                      <th><?php echo $result['lab_state'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Rating</th>
                      <th><?php echo $result['lab_rating'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Status</th>
                      <th><?php echo $result['lab_status'] ?></th>
                      
                    </tr>
                    <tr>
                        <th>Banner</th>
                      <th><img src="upload/<?php echo $result['lab_banner'] ?>" style="width:100%"></th>
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
