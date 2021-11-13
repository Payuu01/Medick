<?php
require('connect.php');
  $userid = $_GET['user'];

  $sql = "delete from patient_tbl where patient_id='$userid'";
  mysql_query($sql, $con);

   header('location:patient.php');
?>