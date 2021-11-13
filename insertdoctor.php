
<?php
require('connect.php');
$doctorname = $_POST['uname'];
$doctorphone = $_POST['uphone'];
$doctoremail = $_POST['uemail'];
$doctorpass = $_POST['upass'];
$doctoraddress = $_POST['uaddress'];
$doctorgender = $_POST['ugender'];
$doctorcity = $_POST['ucity'];
$doctorstate = $_POST['ustate'];
$doctorpincode = $_POST['upincode'];
$doctorspecialization = $_POST['uspecialization'];
$doctorexpertize = $_POST['uexpertize'];
$doctorkeywords = $_POST['ukeywords'];
$doctorexperience = $_POST['uexperience'];
$doctorrating = $_POST['urating'];
$doctoraddedon = $_POST['uadd'];
$doctorstatus = $_POST['ustatus'];

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$filename = $_FILES["myfile"]["name"];
move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);


$sql = "insert into doctor_tbl (doctor_name,doctor_phone,doctor_email,doctor_password,doctor_address,
doctor_gender,doctor_city,doctor_state,doctor_pincode,doctor_img,doctor_specialization,
doctor_expertize,doctor_keywords,doctor_experience,doctor_rating,doctor_addedon,doctor_status) values('$doctorname','$doctorphone','$doctoremail','$doctorpass','$doctorgender','$doctorgender','$doctorcity','$doctorstate','$doctorpincode','$filename','$doctorspecialization','$doctorexpertize','$doctorkeywords','$doctorexperience','$doctorrating','$doctoraddedon','$doctorstatus')";
//echo $sql;
mysql_query($sql, $con);

header('location:doctors.php');
?>