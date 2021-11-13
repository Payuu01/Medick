
<?php
require('connect.php');
print_r($_POST);
$statename = $_POST['uname'];
$statecountry = $_POST['ucountry'];
$statestatus = $_POST['ustatus'];
$stateid = $_POST['uid'];
$sql = "update state_tbl set state_title='$statename', state_country='$statecountry', state_status='$statestatus' where state_id='$stateid'";

mysql_query($sql, $con);
//echo $sql;
header('location:states.php');
?>