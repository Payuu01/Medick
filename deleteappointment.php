<?php
require('connect.php');
  $userid = $_GET['user'];

  $sql = "delete from appointment_tbl where appointment_id='$userid'";
  mysql_query($sql, $con);

   header('location:appointment.php');
?>