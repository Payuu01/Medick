<?php
require('connect.php');
$labname = $_POST['uname'];
$labphone = $_POST['uphone'];
$labaddress = $_POST['uaddress'];
$labpassword = $_POST['upassword'];
$labcity = $_POST['ucity'];
$labstate = $_POST['ustate'];
$labrating = $_POST['urating'];
$labstatus = $_POST['ustatus'];

print_r($_FILES);

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$filename = $_FILES["myfile"]["name"];
move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);

$target_dir1 = "upload/";
$target_file1 = $target_dir1 . basename($_FILES["uimg"]["name"]);
$filename1 = $_FILES["uimg"]["name"];
move_uploaded_file($_FILES["uimg"]["tmp_name"], $target_file1);


$sql = "insert into lab_tbl (lab_name,lab_phone,lab_address,lab_password,lab_city,lab_state,lab_image,lab_banner,lab_rating,lab_status) values('$labname','$labphone','$labaddress','$labpassword','$labcity','$labstate','$filename','$filename1','$labrating','$labstatus')";
//echo $sql;
mysql_query($sql, $con);

header('location:lab.php');
?>