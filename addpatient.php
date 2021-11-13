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
                    <h2 class="title1">Add Patient<span class="pull-right">
                        <a href="patient.php" class="btn btn-info">All Patient</a></span></h2>
                    <div class="panel-body widget-shadow">
                     <form method="post" action="insertpatient.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Patient Name</label>
                                          <input type="text" class="form-control" name="uname">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Phone Number </label>
                                          <input type="number" class="form-control" name="uphone">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> E-mail </label>
                                          <input type="email" class="form-control" name="uemail">
                               </div>
                            </div>

                             <div class="col-md-4">
                               <div class="form-group">
                                    <label> Password </label>
                                          <input type="password" class="form-control" name="upass">
                               </div>
                            </div>



                            
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Gender: </label>
                                         
                                          <input type="radio"  checked name="ugender" value="Male">Male<br>
                                          <input type="radio"  name="ugender" value="feMale">Female<br>
                                           <input type="radio" name="ugender" value="other">other<br>
    
                               </div>
                            </div>


                           
                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>State </label>
                                          <input type="text" class="form-control" name="ustate">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>City </label>
                                          <input type="text" class="form-control" name="ucity">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label> Address </label>
                                          <input type="text" class="form-control" name="uaddress">
                               </div>
                            </div>
                            
                            
                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Age </label>
                                          <input type="date" class="form-control" name="uage">
                               </div>
                            </div>


                             <div class="col-md-4">
                               <div class="form-group">
                                    <label>Allergies</label>
                                          <input type="text" class="form-control" name="uallergies">
                               </div>
                            </div>

                            <div class="col-md-4">
                               <div class="form-group">
                                    <label>Any Medication </label>
                                          <input type="text" class="form-control" name="uanymedication">
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