<?php
require('connect.php');
  $userid = $_GET['user'];

  $sql = "delete from doctor_tbl where doctor_id='$userid'";
  mysql_query($sql, $con);

   header('location:doctors.php');
?>