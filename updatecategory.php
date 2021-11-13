
<?php
require('connect.php');
//print_r($_POST);
$categoryname = $_POST['uname'];
$categorydesc = $_POST['udesc'];

$categorystatus = $_POST['ustatus'];


if(!empty($_FILES["myfile"]["name"])){
	$target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["myfile"]["name"]);

	$filename=$_FILES["myfile"]["name"];

	move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);
}
else{

$filename = $_POST['usrimg'];
}

$categoryid = $_POST['uid'];
$sql = "update category_tbl set category_title='$categoryname', category_desc='$categorydesc',  category_img='$filename',category_status='$categorystatus' where category_id='$categoryid'";

//mysql_query($sql, $con);
echo $sql;
header('location:category.php');
?>