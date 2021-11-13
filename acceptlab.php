
<?php
require('connect.php');

$labid = $_GET['uid'];

$sql = "update lab_tbl set lab_status='1' where lab_id='$labid'";

mysql_query($sql, $con);
//echo $sql;
header('location:viewlab.php?user='.$labid);
?>