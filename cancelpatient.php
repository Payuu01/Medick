
<?php
require('connect.php');

$pid = $_GET['uid'];

$sql = "update patient_tbl set patient_status='2' where patient_id='$pid'";

mysql_query($sql, $con);
//echo $sql;
header('location:viewpatient.php?user='.$pid);
?>