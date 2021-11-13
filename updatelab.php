
<?php
require('connect.php');
print_r($_POST);
$labname = $_POST['uname'];
$labphone = $_POST['uphone'];
$labaddress = $_POST['uaddress'];
$labpassword = $_POST['upassword'];
$labcity = $_POST['ucity'];
$labstate = $_POST['ustate'];
$labrating = $_POST['urating'];
$labstatus = $_POST['ustatus'];
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

if(!empty($_FILES["uimg"]["name"])){
	$target_dir1 = "upload/";
   $target_file1 = $target_dir1 . basename($_FILES["uimg"]["name"]);

	$filename1 = $_FILES["uimg"]["name"];

	move_uploaded_file($_FILES["uimg"]["tmp_name"], $target_file1);
}
else{

$filename1 = $_POST['uimgs'];
}


$labid = $_POST['uid'];
$sql = "update lab_tbl set lab_name='$labname',lab_phone='$labphone',lab_address='$labaddress',lab_password='$labpassword',lab_city='$labcity',lab_state='$labstate',lab_image='$filename',lab_image='$filename',lab_banner='$filename1',lab_rating='$labrating',lab_status='$labstatus' where lab_id='$ladid'";

mysql_query($sql, $con);
//echo $sql;
header('location:lab.php');
?>