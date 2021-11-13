
<?php
require('connect.php');
print_r($_POST);
$appiontmentnumber= $_POST['unumber'];
$appiontmentdate = $_POST['udate'];
$appiontmenttime = $_POST['utime'];
$appiontmentdoctor= $_POST['udoctor'];
$appiontmentpatient = $_POST['upatient'];
$appiontmenton = $_POST['uon'];
$appiontmenttype = $_POST['utype'];
$appiontmentamount= $_POST['uamount'];
$paymentstatus = $_POST['upaymentstatus'];
$paymentmethod= $_POST['umethod'];
$appointmentstatus = $_POST['ustatus'];
print_r($_FILES);

$appointmentid = $_POST['uid'];




$appointmentid = $_POST['uid'];
$sql = "update appointment_tbl set appointment_number='$appiontmentnumber',appointment_date='$appiontmentdate',appointment_time='$appiontmenttime',appointment_doctor='$appiontmentdoctor',appointment_patient='$appiontmentpatient',appointment_on='$appiontmenton',appointment_type='$appiontmenttype',appointment_paymentstatus='$paymentstatus',appointment_paymentmethod='$paymentmethod',appointment_status='$appointmentstatus' where appointment_id='$appointmentid'";

mysql_query($sql, $con);
//echo $sql;
header('location:appointment.php');
?>