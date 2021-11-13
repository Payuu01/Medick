
<?php
require('connect.php');
$appiontmentnumber= $_POST['unumber'];
$appiontmentdate = $_POST['udate'];
$appiontmenttime = $_POST['utime'];
$appiontmentdoctor= $_POST['udoctor'];
$appiontmentpatient = $_POST['upatient'];
$appiontmenton = date('Y-m-d');
$appiontmenttype = $_POST['utype'];
$appiontmentamount= $_POST['uamount'];
$paymentstatus = $_POST['upaymentstatus'];
$paymentmethod= $_POST['umethod'];
$appointmentstatus = 0;


$sql = "insert into appointment_tbl (appointment_number,appointment_date,appointment_time,
appointment_doctor,appointment_patient,appointment_on,appointment_type,appointment_amount,
appointment_paymentstatus,appointment_paymentmethod,appointment_status) values('$appiontmentnumber',
'$appiontmentdate','$appiontmenttime','$appiontmentdoctor','$appiontmentpatient','$appiontmenton',
'$appiontmenttype','$appiontmentamount','$paymentstatus','$paymentmethod','$appointmentstatus')";

//echo $sql;
mysql_query($sql, $con);

header('location:appointment.php');
?>