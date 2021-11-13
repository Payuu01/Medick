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
                   <h2 class="title1">Labs List <span class="pull-right">
                        <a href="addlab.php" class="btn btn-info">Add New</a></span></h2>
                    <div class="panel-body widget-shadow">
                        <h4></h4>
                        <table class="table">
                            <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Lab Nmae</th>
                                  <th>Phone Number</th>
                                  <th>Lab Address</th>
                                  <th>State</th>
                                  <th>Image</th>
                                  <th>Status</th>
                                  <th>Option</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                          <tbody>


<?php
require('connect.php');
$query="select * from lab_tbl";
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
         <td>".$result['lab_image']."</td>
        <td>".$result['lab_status']."</td>
        <td><a href='editlab.php?user=$uid'>Edit</a> | <a href='deletelab.php?user=$uid'>Delete</a></td>
        <td><a data-toggle='tooltip' title='View Lab' href='viewlab.php?user=$uid'><i class='fa fa-eye'></i></a></td>

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
