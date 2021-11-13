
<?php
require('connect.php');
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


$sql = "insert into patient_tbl (patient_name,patient_phone,patient_email,patient_password,
patient_gender,patient_state,patient_city,patient_address,patient_age,patient_allergies,patient_anymedication,patient_status) values('$patientname','$patientphone','$patientemail','$patientpass','$patientgender','$patientstate','$patientcity','$patientaddress','$patientage','$patientallergies','$patientanymedication','$patientstatus')";
//echo $sql;
mysql_query($sql, $con);

header('location:patient.php');
?>