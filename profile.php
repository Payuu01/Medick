<?php
  require('connect.php');
   
 
  $query= "select * from admin_tbl";
//   echo $query;
  $res = mysql_query($query, $con);
  $data = mysql_fetch_assoc($res);
  
  $aid=$data['admin_id']; 
 
?>






<!DOCTYPE HTML>
<html>
    <head>
      
      <title>Profile-Setting</title>

      <link href="css/profile.css" rel='stylesheet'>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel='stylesheet'>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </head>

    <body style="background:#BAB3BB  ">

        <div class="container rounded bg-white mt-5 mb-5">
    
            <div class="row">
       
    
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                          <img class="rounded-circle mt-5" width="150px" src="admin/images/<?php echo $data['admin_image'] ?>" >
                          <span class="font-weight-bold">
                         
                         <?php
                         
                          echo"
                            <p>".$data['admin_name']."</p>
                           ";
                          ?>
                          
                          </span>
                          
                          <span class="text-black-50">
                          <?php
                         
                         echo"
                           <p>".$data['admin_email']."</p>
                          ";
                         ?>


                          </span>
                          <span> </span>
                        </div>
                    </div>
        
        
                <div class="col-md-5 border-right">
            
        
                    <div class="p-3 py-5">
                
                        <div class="d-flex justify-content-between align-items-center mb-3">
                           <h4 class="text-right">Profile Settings</h4>
                        </div>
               
               
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" value="<?php echo $data['admin_name'] ?>"></div>
                            
                        </div>
               
               
                        <div class="row mt-3">
                             <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control"  value="<?php echo $data['admin_phone'] ?>"></div>
                             <div class="col-md-12"><label class="labels">Email Address</label><input type="text" class="form-control"  value="<?php echo $data['admin_email'] ?>"></div>
                             <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control"  value="<?php echo $data['admin_password'] ?>"></div>
                            
               
               
               
                        
               
                                <div class="mt-5 text-center">
                                     <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                                </div>
            
            
                    </div>
                </div>
        
        
                           
    
            </div>
        </div>

    </body>



</html>