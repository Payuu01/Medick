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
                    <h2 class="title1">Add lab <span class="pull-right">
                        <a href="lab.php" class="btn btn-info">All labs</a></span></h2>
                    <div class="panel-body widget-shadow">
                     <form method="post" action="insertlab.php" enctype="multipart/form-data">
                     	<div class="row">
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Lab Name</label>
						                  <input type="text" class="form-control" name="uname">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Phone Number</label>
						                  <input type="number" class="form-control" name="unumber">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Lab Address</label>
                                          <input type="text" class="form-control" name="uaddress">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Password</label>
                                          <input type="text" class="form-control" name="upassword">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>City</label>
                                          <input type="text" class="form-control" name="ucity">
                               </div>
                            </div>



                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>State</label>
                                          <input type="text" class="form-control" name="ustate">
                               </div>
                            </div>



                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Lab Image</label>
                                          <input type="file" class="form-control" name="myfile">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Lab Banner</label>
                                          <input type="file" class="form-control" name="uimg">
                               </div>
                            </div>

                    
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Rating </label>
                                          <input type="text" class="form-control" name="urating">
                               </div>
                            </div>

                           

                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Status</label>
						                  <select name="ustatus" class="form-control">
									            <option value="1">Active</option>
									             <option value="0">In-Active</option>
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