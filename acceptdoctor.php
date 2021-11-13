
<?php
require('connect.php');

$docid = $_GET['uid'];

$sql = "update doctor_tbl set doctor_status='1' where doctor_id='$docid'";

mysql_query($sql, $con);
//echo $sql;
header('location:viewdoctor.php?user='.$docid);
?>