<?php
  require('connect.php');
  $userid = $_GET['user'];

  $sql = "select * from category_tbl where m_category_id = '$userid'";
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
                        <a href="category.php" class="btn btn-info">All categories</a></span></h2>
                    <div class="panel-body widget-shadow">
                     <form method="post" action="updatecategory.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Category Name</label>
                                          <input type="text" class="form-control" name="uname" value="<?php echo $usr['m_category_title']?>">
                               </div>
                            </div>
                            <input type="hidden" name="uid" value="<?php echo $usr['m_category_id'] ?>">


                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Category Description</label>
                                          <input type="text" class="form-control" name="udesc"value="<?php echo $usr['m_category_desc']?>">
                               </div>
                            </div>

                             <div class="col-md-4">
                               <div class="form-group">
                                    <label> Category Image</label>
                                          <input type="file" class="form-control"
                                           name="myfile" >
                                          <input type="hidden" name="usrimg" value="<?php echo $usr['m_category_img']?>" >
                               </div>
                            </div>


                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Status</label>
                                
                                       <?php $st = $usr['m_category_status']; ?>
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
