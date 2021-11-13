
<?php
require('connect.php');
print_r($_POST);
$patientname = $_POST['uname'];
$patientphone = $_POST['uphone'];
$patientemail = $_POST['uemail'];
$patientpass = $_POST['upass'];
$patientgender = $_POST['ugender'];
$patientstate = $_POST['ustate'];
$patientcity = $_POST['ucity'];
$patientaddress = $_POST['uaddress'];
$patientage = $_POST['uage'];
$patientallergies = $_POST['uallergies'];
$patientanymedication = $_POST['uanymedication'];
$patientstatus = $_POST['ustatus'];

print_r($_FILES);

$patientid = $_POST['uid'];


$patientid = $_POST['uid'];
$sql = "update patient_tbl set patient_name='$patientname',patient_phone='$patientphone',patient_email='$patientemail',patient_password='$patientpass',
patient_gender='$patientgender',patient_state='$patientstate',patient_city='$patientcity',patient_address='$patientaddress',patient_age='$patientage',patient_allergies='$patientallergies',patient_anymedication='$patientanymedication',patient_status='$patientstatus' where patient_id='$patientid'";

mysql_query($sql, $con);
//echo $sql;
header('location:patient.php');
?>