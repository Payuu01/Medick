
<?php
require('connect.php');
$categoryname = $_POST['uname'];
$categorydesc = $_POST['udesc'];
$categorystatus = $_POST['ustatus'];

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$filename = $_FILES["myfile"]["name"];
move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file);

print_r($_FILES);


$sql = "insert into category_tbl (category_title,category_desc,category_img,category_status) values('$categoryname','$categorydesc','$filename','$categorystatus')";
echo $sql;
//mysql_query($sql, $con);

header('location:category.php');
?>