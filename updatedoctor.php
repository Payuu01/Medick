
<?php
require('connect.php');
print_r($_POST);
$doctorname = $_POST['uname'];
$doctorphone = $_POST['uphone'];
$doctoremail = $_POST['uemail'];
$doctorpass = $_POST['upass'];
$doctoraddress = $_POST['uaddress'];
$doctorgender = $_POST['ugender'];
$doctorstate = $_POST['ustate'];
$doctorcity = $_POST['ucity'];
$doctorpincode = $_POST['upincode'];
$doctorspecialization = $_POST['uspecialization'];
$doctorexpertize = $_POST['uexpertize'];
$doctorrating = $_POST['urating'];
$doctoraddedon = $_POST['uadd'];
$doctorstatus = $_POST['ustatus'];
print_r($_FILES);

$doctorid = $_POST['uid'];

if(!empty($_FILES["myfile"]["name"])){
	$target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["myfile"]["name"]);

	$filename=$_FILES["myfile"]["name"];

	move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);
}
else{

$filename = $_POST['usrimg'];
}



$doctorid = $_POST['uid'];
$sql = "update doctor_tbl set doctor_name='$doctorname',doctor_phone='$doctorphone',doctor_email='$doctoremail',doctor_password='$doctorpass',doctor_address='$doctoraddress',doctor_gender='$doctorgender',doctor_state='$doctorstate',doctor_city='$doctorcity',doctor_img='$filename',doctor_specialization='$doctorspecialization',doctor_expertize='$doctorexpertize',doctor_rating='$doctorrating',doctor_addedon='$doctoraddedon',doctor_status='$doctorstatus' where doctor_id='$doctorid'";

mysql_query($sql, $con);
//echo $sql;
header('location:doctors.php');
?>