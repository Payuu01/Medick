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
                   <h2 class="title1">Students List <span class="pull-right">
                        <a href="addstudent.php" class="btn btn-info">Add New</a></span></h2>
                    <div class="panel-body widget-shadow">
                     
                        <h4></h4>
                        <table class="table">
                            <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Students Name </th>
                                  <th>Phone Number</th>
                                  <th>DOB</th>
                                  <th>Gender</th>
                                  <th>Image</th>
                                  <th>City</th>
                                  <th>Status</th>
                                  <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>


<?php
require('connect.php');
$query="select * from student_tbl";
$data=mysql_query($query, $con);
//$result= mysql_fetch_assoc($data);
   $num = 1;
  while($result=mysql_fetch_assoc($data))
    {
        $uid = $result['m_student_id'];
    
        echo"
        <tr>
        <td>".$num."</td>
        <td>".$result['m_student_name']."</td>
        <td>".$result['m_student_phone']."</td>
        <td>".$result['m_student_dob']."</td>
        <td>".$result['m_student_gender']."</td>
         <td>".$result['m_student_img']."</td>
          <td>".$result['m_student_city']."</td>
        <td>".$result['m_student_status']."</td>
        <td><a href='editstudent.php?user=$uid'>Edit</a> | <a href='deletestudent.php?user=$uid'>Delete</a></td>
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
