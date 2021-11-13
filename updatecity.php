
<?php
require('connect.php');
print_r($_POST);
$cityname = $_POST['uname'];
$citystate = $_POST['ustate'];
$citystatus = $_POST['ustatus'];
$cityid = $_POST['uid'];
$sql = "update city_tbl set city_title='$cityname', city_state='$citystate', city_status='$citystatus' where city_id='$cityid'";

mysql_query($sql, $con);
//echo $sql;
header('location:city.php');
?>