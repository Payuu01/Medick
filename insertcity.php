
<?php
require('connect.php');
$cityname = $_POST['uname'];
$citystate = $_POST['ustate'];
$citystatus = $_POST['ustatus'];

$sql = "insert into city_tbl (city_title,city_status) values('$cityname','$citystatus')";
//echo $sql;
mysql_query($sql, $con);

header('location:city.php');
?>