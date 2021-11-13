
<?php
require('connect.php');

$appointmentid = $_GET['uid'];

$sql = "update appointment_tbl set appointment_status='2' where appointment_id='$appointmentid'";

mysql_query($sql, $con);
//echo $sql;
header('location:viewappointment.php?user='.$appointmentid);
?>